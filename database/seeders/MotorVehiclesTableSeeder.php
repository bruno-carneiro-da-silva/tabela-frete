<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MotorVehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $motorVehiclesTableSeeder = [
            ['tipo_de_carga' => 'Granel sólido', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [4.4705, 4.9495, 5.7813, 5.9928, 6.5437]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [448.18, 476.09, 558.82, 591.58, 606.24]
                    ]
            ]],
            ['tipo_de_carga' => 'Granel líquido', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [4.5090, 4.9880, 5.8198, 6.0313, 6.5821]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [448.18, 476.09, 558.82, 591.58, 606.24]]
            ]],
            ['tipo_de_carga' => 'Frigorificada ou Aquecida', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [5.2381, 5.8067, 6.7403, 6.9660, 7.6478]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [488.90, 516.81, 599.54, 636.19, 652.68]]
            ]],
            ['tipo_de_carga' => 'Conteinerizada', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' => [ 4.4705, 4.9495, 5.7813, 5.9928, 6.5437]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [448.18, 476.09, 558.82, 591.58, 606.24]]
            ]],
            ['tipo_de_carga' => 'Carga Geral', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [4.4705, 4.9495, 5.7813, 5.9928, 6.5437]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [448.18, 476.09, 558.82, 591.58, 606.24]]
            ]],
            ['tipo_de_carga' => 'Neogranel', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' => [ 4.4705, 4.9495, 5.7813, 5.9928, 6.5437]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [448.18, 476.09, 558.82, 591.58, 606.24]]
            ]],
            ['tipo_de_carga' => 'Perigosa (granel sólido)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [5.1680, 5.6470, 6.4788, 6.7045, 7.2620]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [582.23, 610.14, 692.86, 729.52, 746.01]]
            ]],
            ['tipo_de_carga' => 'Perigosa (granel líquido)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [5.2079, 5.6869, 6.5187, 6.7444, 7.3019]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [593.21, 621.12, 703.85, 740.50, 756.99]]
            ]],
            ['tipo_de_carga' => 'Perigosa (frigorificada ou aquecida)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [5.7876, 6.3562, 7.2898, 7.5338, 8.2243]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [590.69, 618.60, 701.33, 743.04, 761.91]]
            ]],
            ['tipo_de_carga' => 'Perigosa (conteinerizada)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [4.8177, 5.2967, 6.1285, 6.3542, 6.9117]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [537.75, 565.66, 648.39, 685.04, 701.53]]
            ]],
            ['tipo_de_carga' => 'Perigosa (carga geral)', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [4.8177, 5.2967, 6.1285, 6.3542, 6.9117]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [537.75, 565.66, 648.39, 685.04, 701.53]]
            ]],
            ['tipo_de_carga' => 'Carga Granel Pressurizada', 'coeficiente_de_custo' => [
                'Deslocamento (CCD)' => [
                    'distance' => 'R$/km',
                    'values' =>  [null, 4.9495, 5.7813, null, 6.5437]],
                'Carga e descarga (CC)' => [
                    'distance' => 'R$',
                    'values' => [null, 476.09, 558.82, null, 606.24]]
            ]]
        ];

        foreach ($motorVehiclesTableSeeder as $item) {
            // Encontre o id da Resolution desejada. Exemplo: procurando pela resolução mais recente
            $resolutionId = Resolution::where('name', 'like', '%Resolução%')->latest()->first()->id;

            DB::table('motor_vehicles')->insert([
                'resolution_id' => $resolutionId,
                'load_type' => $item['load_type'],
                'cost_coefficient' => $item['cost_coefficient'],
                'distance' => $item['distance'],
                'number_of_axles' => json_encode($item['number_of_axles']), // Certifique-se de que a coluna aceita JSON
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
