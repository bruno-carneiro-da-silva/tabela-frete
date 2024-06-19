<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CapacityLoad;
use App\Models\Resolution;

class CapacityLoadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $resolution = Resolution::where('name', 'like', '%Resolução%')->latest()->first();
        if (!$resolution) {
            $resolution = Resolution::create([
                'name' => '18/01/2024, Resolução Nº 6.034 (atual)',
                'link' => 'https://www.in.gov.br/en/web/dou/-/resolucao-n-6.034-de-18-de-janeiro-de-2024-538363035',
            ]);
        }
        //após o R$/km os numeros é referente aos eixos 2,3,4,5,6,7,9
        $capacityLoads = [
            [
                'tipo_de_carga' => 'Granel sólido',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [3.4331, 4.3821, 5.0599, 5.5195, 6.1476, 6.9381, 7.8196]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [397.28, 481.90, 521.48, 513.43, 540.12, 690.73, 735.06]
                    ],
                ],
            ],
            [
                'tipo_de_carga' => 'Granel líquido',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 3.5064, 4.4806, 5.0413, 5.6660, 6.3776, 7.0775, 8.1032]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [411.94, 503.50, 505.79, 543.13, 592.78, 718.50, 802.46]
                    ],
                ],
            ],
            [
                'tipo_de_carga' => 'Frigorificada ou Aquecida',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 4.1335, 5.2502, 6.0468, 6.7176, 7.4125, 8.7727, 9.6599]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [476.88, 573.21, 622.51, 647.88, 664.97, 972.25, 983.92],
                ],
            ]],
            [
                'tipo_de_carga' => 'Conteneirizada',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ null, 4.3559, 4.9386, 5.4622, 6.0752, 6.9249, 7.7762]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [null, 487.58, 497.66, 520.21, 687.11, 718.10, 723.12],
                ],
            ]],

            [
                'tipo_de_carga' => 'Carga Geral',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 3.4102, 4.3680, 5.0055, 5.4909, 6.0684, 6.9450, 7.8685]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [390.99, 478.03, 509.83, 505.56, 518.35, 692.62, 748.51],
                ],
            ]],
            [
                'tipo_de_carga' => 'Neogranel',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 3.0784, 4.3680, 5.0175, 5.4909, 6.0684, 6.9450, 7.8685]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [390.99, 478.03, 509.83, 505.56, 518.35, 692.62, 748.51],
                ],

            ]],
            [
                'tipo_de_carga' => 'Perigosa (granel sólido)',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 4.0908, 5.0398, 5.7574, 6.2170, 6.8451, 7.6497, 8.5379]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [523.24, 607.86, 655.53, 647.48, 674.17, 828.67, 874.83],
                ],
            ]],
            [
                'tipo_de_carga' => 'Perigosa (granel líquido)',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 4.1841, 5.1583, 5.7403, 6.3650, 7.0775, 7.7909, 8.8230]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [548.89, 640.44, 650.82, 688.16, 737.82, 867.42, 953.22],
                ],
            ]],
            [
                'tipo_de_carga' => 'Perigosa (frigorificada ou aquecida)',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 4.6491, 5.7658, 6.5963, 7.2671, 7.9620, 9.3406, 10.2364]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [568.15, 664.49, 724.30, 749.67, 776.76, 1.079,10, 1.093,15],
                ],
            ]],
            [
                'tipo_de_carga' => 'Perigosa (conteneirizada)',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 4.6634, 5.2838, 5.8094, 6.4224, 7.2863, 7.8235, 8.1442]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [556.19, 577.15, 587.23, 609.79, 780.58, 818.41, 818.41],
                ],
            ]],
            [
                'tipo_de_carga' => 'Perigosa (carga geral)',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ 3.7177, 4.6754, 5.3528, 5.8381, 6.4156, 7.3063, 8.2366]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [472.47, 599.51, 596.10, 595.13, 607.92, 786.09, 843.80],
                ],
            ]],
            [
                'tipo_de_carga' => 'Carga Granel Pressurizada',
                'coeficiente_de_custo' => [
                    'Deslocamento (CCD)' => [
                        'distance' => 'R$/km',
                        'values' => [ null, null, null, 5.8741, 6.5741, null, 8.4113]
                    ],
                    'Carga e descarga (CC)' => [
                        'distance' => 'R$',
                        'values' => [null, null, null, 610.92, 657.41, null, 897.78],
                ],
            ]],
        ];

        foreach ($capacityLoads as $item) {

            DB::table('capacity_loads')->insert([
                'resolution_id' => $resolution->id,
                'load_type' => $item['load_type'],
                'cost_coefficient' => $item['cost_coefficient'],
                'distance' => $item['distance'],
                'number_of_axles' => json_encode($item['number_of_axles']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
