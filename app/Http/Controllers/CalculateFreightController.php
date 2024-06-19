<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CapacityLoad;

class CalculateFreightController extends Controller
{
    public function calculate(Request $request)
    {
        // Validar os dados da requisição
        $request->validate([
            'resolution_id' => 'required|string',
            'distance' => 'required|numeric',
            'number_of_axles' => 'required|integer',
            'load_type' => 'required|string',
        ]);

        // Receber os dados da requisição
        $resolutionID = $request->input('resolution_id');
        $distance = $request->input('distance');
        $numberOfAxles = $request->input('number_of_axles');
        $loadType = $request->input('load_type');

        // Buscar os coeficientes de custo do tipo de carga do banco de dados
        $capacityLoad = CapacityLoad::where('load_type', $loadType)->first();

        if (!$capacityLoad) {
            return response()->json(['error' => 'Tipo de carga não encontrado.'], 404);
        }

        $costCoefficients = json_decode($capacityLoad->cost_coefficient, true);

        // Encontrar o índice do número de eixos
        $axleIndex = $numberOfAxles - 2;

        if (!isset($costCoefficients['Deslocamento (CCD)']['values'][$axleIndex]) ||
            !isset($costCoefficients['Carga e descarga (CC)']['values'][$axleIndex])) {
            return response()->json(['error' => 'Número de eixos inválido para este tipo de carga.'], 400);
        }

        $displacement = $costCoefficients['Deslocamento (CCD)']['values'][$axleIndex];
        $loadingUnloading = $costCoefficients['Carga e descarga (CC)']['values'][$axleIndex];

        // Calcular os custos
        $displacementCost = $displacement * $distance;
        $totalCost = $displacementCost + $loadingUnloading;

        // Montar a resposta
        $response = [
            'displacement_cost' => $displacementCost,
            'loading_unloading' => $loadingUnloading,
            'total_cost' => $totalCost,
        ];

        return response()->json($response);
    }
}
