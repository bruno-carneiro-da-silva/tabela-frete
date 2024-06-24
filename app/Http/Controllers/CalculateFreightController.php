<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CapacityLoad;
use App\Models\Resolution;
use App\Models\CargoCategory;
use App\Models\LoadType;

class CalculateFreightController extends Controller
{
    public function calculate(Request $request)
    {
        // Validar os dados da requisição
        $request->validate([
            'resolution' => 'required|string',
            'distance' => 'required|numeric',
            'number_of_axles' => 'required|integer',
            'load_type' => 'required|string',
        ]);

        // Receber os dados da requisição
        $resolutionName = $request->input('resolution');
        $distance = $request->input('distance');
        $numberOfAxles = $request->input('number_of_axles');
        $loadTypeName = $request->input('load_type');

        // Buscar a resolução no banco de dados
        $resolution = Resolution::where('name', $resolutionName)->first();

        if (!$resolution) {
            return response()->json(['error' => 'Resolução não encontrada.'], 404);
        }

        // Buscar a categoria de carga no banco de dados
        $cargoCategory = CargoCategory::where('name', 'Carga lotação')->first();

        if (!$cargoCategory) {
            return response()->json(['error' => 'Categoria de carga não encontrada.'], 404);
        }

        // Buscar o tipo de carga no banco de dados
        $loadType = LoadType::where('name', $loadTypeName)
                            ->where('cargo_category_id', $cargoCategory->id)
                            ->first();

        if (!$loadType) {
            return response()->json(['error' => 'Tipo de carga não encontrada.'], 404);
        }

        // Buscar os coeficientes de custo do tipo de carga no banco de dados
        $capacityLoad = CapacityLoad::where('resolution_id', $resolution->id)
                                    ->where('cargo_category_id', $cargoCategory->id)
                                    ->where('load_type_id', $loadType->id)
                                    ->where('number_of_axles', $numberOfAxles)
                                    ->first();

        if (!$capacityLoad) {
            return response()->json(['error' => 'Combinação de dados não encontrada.'], 404);
        }

        // Calcular os custos
        $cddValue = $capacityLoad->cdd_value;
        $cdValue = $capacityLoad->cd_value;

        $displacementCost = $cddValue * $distance;
        $totalCost = $displacementCost + $cdValue;

        // Montar a resposta
        $response = [
            'displacement_cost' => $displacementCost,
            'loading_unloading' => $cdValue,
            'total_cost' => $totalCost,
        ];

        return response()->json($response);
    }
}
