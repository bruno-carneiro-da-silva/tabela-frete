<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CargoCategory;
use App\Models\CapacityLoad;
use App\Models\Resolution;
use App\Models\LoadTypes;
use Illuminate\Support\Facades\DB;

class CapacityLoadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cargoLotationCategory = CargoCategory::firstOrCreate(['name' => 'Carga Lotação']);

        $resolution = Resolution::firstOrCreate([
            'name' => '18/01/2024, Resolução Nº 6.034 (atual)',
            'link' => 'https://www.in.gov.br/en/web/dou/-/resolucao-n-6.034-de-18-de-janeiro-de-2024-538363035',
        ]);

        $loadTypes = [
            'Granel sólido',
            'Granel líquido',
            'Frigorificada ou Aquecida',
            'Conteneirizada',
            'Carga Geral',
            'Neogranel',
            'Perigosa (granel sólido)',
            'Perigosa (granel líquido)',
            'Perigosa (frigorificada ou aquecida)',
            'Perigosa (conteneirizada)',
            'Perigosa (carga geral)',
            'Carga Granel Pressurizada',
        ];

        foreach ($loadTypes as $loadTypeName) {
            $loadType = LoadTypes::firstOrCreate([
                'name' => $loadTypeName,
                'cargo_category_id' => $cargoLotationCategory->id
            ]);

            $axleValues = [
                'Granel sólido' => [
                    ['number_of_axles' => "2", 'cdd_value' => 3.4331, 'cd_value' => 397.28],
                    ['number_of_axles' => "3", 'cdd_value' => 4.3821, 'cd_value' => 481.90],
                    ['number_of_axles' => "4", 'cdd_value' => 5.0599, 'cd_value' => 521.48],
                    ['number_of_axles' => "5", 'cdd_value' => 5.5195, 'cd_value' => 513.43],
                    ['number_of_axles' => "6", 'cdd_value' => 6.1476, 'cd_value' => 540.12],
                    ['number_of_axles' => "7", 'cdd_value' => 6.9381, 'cd_value' => 690.73],
                    ['number_of_axles' => "9", 'cdd_value' => 7.8196, 'cd_value' => 735.06]
                ],
                'Granel líquido' => [
                    ['number_of_axles' => "2", 'cdd_value' => 3.5064, 'cd_value' => 411.94],
                    ['number_of_axles' => "3", 'cdd_value' => 4.4806, 'cd_value' => 503.50],
                    ['number_of_axles' => "4", 'cdd_value' => 5.0413, 'cd_value' => 505.79],
                    ['number_of_axles' => "5", 'cdd_value' => 5.6660, 'cd_value' => 543.13],
                    ['number_of_axles' => "6", 'cdd_value' => 6.3776, 'cd_value' => 592.78],
                    ['number_of_axles' => "7", 'cdd_value' => 7.0775, 'cd_value' => 718.50],
                    ['number_of_axles' => "9", 'cdd_value' => 8.1032, 'cd_value' => 802.46]
                ],
                'Frigorificada ou Aquecida' => [
                    ['number_of_axles' => "2", 'cdd_value' => 4.1335, 'cd_value' => 476.88],
                    ['number_of_axles' => "3", 'cdd_value' => 5.2502, 'cd_value' => 573.21],
                    ['number_of_axles' => "4", 'cdd_value' => 6.0468, 'cd_value' => 622.51],
                    ['number_of_axles' => "5", 'cdd_value' => 6.7176, 'cd_value' => 647.88],
                    ['number_of_axles' => "6", 'cdd_value' => 7.4125, 'cd_value' => 664.97],
                    ['number_of_axles' => "7", 'cdd_value' => 8.7727, 'cd_value' => 972.25],
                    ['number_of_axles' => "9", 'cdd_value' => 9.6599, 'cd_value' => 983.92]
                ],
                'Conteneirizada' => [
                    ['number_of_axles' => "3", 'cdd_value' => 4.3559, 'cd_value' => 487.58],
                    ['number_of_axles' => "4", 'cdd_value' => 4.9386, 'cd_value' => 497.66],
                    ['number_of_axles' => "5", 'cdd_value' => 5.4622, 'cd_value' => 520.21],
                    ['number_of_axles' => "6", 'cdd_value' => 6.0752, 'cd_value' => 687.11],
                    ['number_of_axles' => "7", 'cdd_value' => 6.9249, 'cd_value' => 718.10],
                    ['number_of_axles' => "9", 'cdd_value' => 7.7762, 'cd_value' => 723.12]
                ],
                'Carga Geral' => [
                    ['number_of_axles' => "2", 'cdd_value' => 3.4102, 'cd_value' => 390.99],
                    ['number_of_axles' => "3", 'cdd_value' => 4.3680, 'cd_value' => 478.03],
                    ['number_of_axles' => "4", 'cdd_value' => 5.0055, 'cd_value' => 509.83],
                    ['number_of_axles' => "5", 'cdd_value' => 5.4909, 'cd_value' => 505.56],
                    ['number_of_axles' => "6", 'cdd_value' => 6.0684, 'cd_value' => 518.35],
                    ['number_of_axles' => "7", 'cdd_value' => 6.9450, 'cd_value' => 692.62],
                    ['number_of_axles' => "9", 'cdd_value' => 7.8685, 'cd_value' => 748.51]
                ],
                'Neogranel' => [
                    ['number_of_axles' => "2", 'cdd_value' => 3.0784, 'cd_value' => 390.99],
                    ['number_of_axles' => "3", 'cdd_value' => 4.3680, 'cd_value' => 478.03],
                    ['number_of_axles' => "4", 'cdd_value' => 5.0175, 'cd_value' => 509.83],
                    ['number_of_axles' => "5", 'cdd_value' => 5.4909, 'cd_value' => 505.56],
                    ['number_of_axles' => "6", 'cdd_value' => 6.0684, 'cd_value' => 518.35],
                    ['number_of_axles' => "7", 'cdd_value' => 6.9450, 'cd_value' => 692.62],
                    ['number_of_axles' => "9", 'cdd_value' => 7.8685, 'cd_value' => 748.51]
                ],
                'Perigosa (granel sólido)' => [
                    ['number_of_axles' => "2", 'cdd_value' => 4.0908, 'cd_value' => 523.24],
                    ['number_of_axles' => "3", 'cdd_value' => 5.0398, 'cd_value' => 607.86],
                    ['number_of_axles' => "4", 'cdd_value' => 5.7574, 'cd_value' => 655.53],
                    ['number_of_axles' => "5", 'cdd_value' => 6.2170, 'cd_value' => 647.48],
                    ['number_of_axles' => "6", 'cdd_value' => 6.8451, 'cd_value' => 674.17],
                    ['number_of_axles' => "7", 'cdd_value' => 7.6497, 'cd_value' => 828.67],
                    ['number_of_axles' => "9", 'cdd_value' => 8.5379, 'cd_value' => 874.83]
                ],
                'Perigosa (granel líquido)' => [
                    ['number_of_axles' => "2", 'cdd_value' => 4.1841, 'cd_value' => 548.89],
                    ['number_of_axles' => "3", 'cdd_value' => 5.1583, 'cd_value' => 640.44],
                    ['number_of_axles' => "4", 'cdd_value' => 5.7403, 'cd_value' => 650.82],
                    ['number_of_axles' => "5", 'cdd_value' => 6.3650, 'cd_value' => 688.16],
                    ['number_of_axles' => "6", 'cdd_value' => 7.0775, 'cd_value' => 737.82],
                    ['number_of_axles' => "7", 'cdd_value' => 7.7909, 'cd_value' => 867.42],
                    ['number_of_axles' => "9", 'cdd_value' => 8.8230, 'cd_value' => 953.22]
                ],
                'Perigosa (frigorificada ou aquecida)' => [
                    ['number_of_axles' => "2", 'cdd_value' => 4.6491, 'cd_value' => 568.15],
                    ['number_of_axles' => "3", 'cdd_value' => 5.7658, 'cd_value' => 664.49],
                    ['number_of_axles' => "4", 'cdd_value' => 6.5963, 'cd_value' => 724.30],
                    ['number_of_axles' => "5", 'cdd_value' => 7.2671, 'cd_value' => 749.67],
                    ['number_of_axles' => "6", 'cdd_value' => 7.9620, 'cd_value' => 776.76],
                    ['number_of_axles' => "7", 'cdd_value' => 9.3406, 'cd_value' => 1079.10],
                    ['number_of_axles' => "9", 'cdd_value' => 10.2364, 'cd_value' => 1093.15]
                ],
                'Perigosa (conteneirizada)' => [
                    ['number_of_axles' => "2", 'cdd_value' => 4.6634, 'cd_value' => 556.19],
                    ['number_of_axles' => "3", 'cdd_value' => 5.2838, 'cd_value' => 577.15],
                    ['number_of_axles' => "4", 'cdd_value' => 5.8094, 'cd_value' => 587.23],
                    ['number_of_axles' => "5", 'cdd_value' => 6.4224, 'cd_value' => 609.79],
                    ['number_of_axles' => "6", 'cdd_value' => 7.2863, 'cd_value' => 780.58],
                    ['number_of_axles' => "7", 'cdd_value' => 7.8235, 'cd_value' => 818.41],
                    ['number_of_axles' => "9", 'cdd_value' => 8.1442, 'cd_value' => 818.41]
                ],
                'Perigosa (carga geral)' => [
                    ['number_of_axles' => "2", 'cdd_value' => 3.7177, 'cd_value' => 472.47],
                    ['number_of_axles' => "3", 'cdd_value' => 4.6754, 'cd_value' => 599.51],
                    ['number_of_axles' => "4", 'cdd_value' => 5.3528, 'cd_value' => 596.10],
                    ['number_of_axles' => "5", 'cdd_value' => 5.8381, 'cd_value' => 595.13],
                    ['number_of_axles' => "6", 'cdd_value' => 6.4156, 'cd_value' => 607.92],
                    ['number_of_axles' => "7", 'cdd_value' => 7.3063, 'cd_value' => 786.09],
                    ['number_of_axles' => "9", 'cdd_value' => 8.2366, 'cd_value' => 843.80]
                ],
                'Carga Granel Pressurizada' => [
                    ['number_of_axles' => "4", 'cdd_value' => 5.8741, 'cd_value' => 610.92],
                    ['number_of_axles' => "5", 'cdd_value' => 6.5741, 'cd_value' => 657.41],
                    ['number_of_axles' => "7", 'cdd_value' => 8.4113, 'cd_value' => 897.78]
                ],
            ];

            if(isset($axleValues[$loadTypeName])) {
                foreach ($axleValues[$loadTypeName] as $axleValue) {
                    DB::table('capacity_loads')->insert([
                        'resolution_id' => $resolution->id,
                        'cargo_category_id' => $cargoLotationCategory->id,
                        'load_type_id' => $loadType->id,
                        'number_of_axles' => $axleValue['number_of_axles'],
                        'distance' => 0, // or any default value or logic
                        'cdd_value' => $axleValue['cdd_value'],
                        'cd_value' => $axleValue['cd_value'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }
}
