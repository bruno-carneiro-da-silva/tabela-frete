<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HighPerfomanceCapacityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['tipo_de_carga' => 'Granel sólido', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 2.8675, 3.6193, 4.2753, 4.7998, 5.4526, 5.7929, 6.5871],
                'Carga e descarga (CC)' => ['R$', 145.05, 163.28, 183.43, 189.29, 229.39, 225.49, 237.67]
            ]],
            ['tipo_de_carga' => 'Granel líquido', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 2.9006, 3.6675, 4.2933, 4.8771, 5.5598, 5.8677, 6.7145],
                'Carga e descarga (CC)' => ['R$', 148.21, 167.94, 180.05, 195.69, 220.74, 231.47, 252.19]
            ]],
            ['tipo_de_carga' => 'Frigorificada ou Aquecida', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 3.4677, 4.3598, 5.1332, 5.7908, 6.5329, 7.0880, 7.9687],
                'Carga e descarga (CC)' => ['R$', 176.26, 197.02, 222.75, 235.81, 253.83, 305.83, 311.31]
            ]],
            ['tipo_de_carga' => 'Conteinerizada', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', null, 3.6099, 4.7792, 5.4266, 5.7882, 6.5715, 6.5751],
                'Carga e descarga (CC)' => ['R$', null, 161.73, 185.90, 200.56, 224.71, 235.10, 235.10]
            ]],
            ['tipo_de_carga' => 'Carga Geral', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 2.8593, 3.6142, 4.2558, 4.7898, 5.4241, 5.7954, 6.6047],
                'Carga e descarga (CC)' => ['R$', 143.69, 162.45, 180.92, 187.60, 204.70, 225.90, 240.57]
            ]],
            ['tipo_de_carga' => 'Neogranel', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 2.5275, 3.6142, 4.2601, 4.7895, 5.4241, 5.7954, 6.6047],
                'Carga e descarga (CC)' => ['R$', 143.69, 162.45, 180.92, 187.60, 204.70, 225.90, 240.57]
            ]],
            ['tipo_de_carga' => 'Perigosa (granel sólido)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 3.3169, 4.0687, 4.7668, 5.2912, 5.9440, 6.2997, 7.1010],
                'Carga e descarga (CC)' => ['R$', 186.25, 204.49, 229.86, 235.73, 255.83, 274.44, 287.80]
            ]],
            ['tipo_de_carga' => 'Perigosa (granel líquido)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 3.3504, 4.1113, 4.7606, 5.3443, 6.0271, 6.3503, 7.2034],
                'Carga e descarga (CC)' => ['R$', 191.78, 211.51, 228.85, 244.49, 269.54, 282.79, 304.69]
            ]],
            ['tipo_de_carga' => 'Perigosa (frigorificada ou aquecida)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 3.8814, 4.7736, 5.5837, 6.2414, 6.9834, 7.5584, 8.4484],
                'Carga e descarga (CC)' => ['R$', 214.21, 234.97, 267.50, 280.56, 298.59, 353.40, 360.86]
            ]],
            ['tipo_de_carga' => 'Perigosa (conteinerizada)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', null, null, 4.4759, 5.0420, 5.6714, 6.0483, 6.8388],
                'Carga e descarga (CC)' => ['R$', null, null, 212.98, 222.75, 241.95, 264.08, 275.65]
            ]],
            ['tipo_de_carga' => 'Perigosa (carga geral)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', 3.0621, 3.8170, 4.5056, 5.0343, 5.6690, 6.0555, 6.8719],
                'Carga e descarga (CC)' => ['R$', 175.32, 194.07, 217.06, 224.45, 241.55, 265.26, 281.12]
            ]],
            ['tipo_de_carga' => 'Carga Granel Pressurizada', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => ['R$/km', null, null, null, 4.9271, 5.6057, null, 6.7996],
                'Carga e descarga (CC)' => ['R$', null, null, null, 210.30, 234.67, null, 272.73]
            ]]
        ];

        foreach ($data as $item) {
            // Encontre o id da Resolution desejada. Exemplo: procurando pela resolução mais recente
            $resolutionId = Resolution::where('name', 'like', '%Resolução%')->latest()->first()->id;

            DB::table('motor_vehicles')->insert([
                'resolution_id' => $resolutionId,
                'load_type' => $item['load_type'],
                'cost_coefficient' => $item['cost_coefficient'],
                'unit' => $item['unit'],
                'number_of_axles' => json_encode($item['number_of_axles']), // Certifique-se de que a coluna aceita JSON
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
