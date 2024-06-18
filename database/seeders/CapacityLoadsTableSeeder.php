<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resolution;

class CapacityLoadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
    ['load_type' => 'Granel sólido', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 3.4331, 3 => 4.3821, 4 => 5.0599, 5 => 5.5195, 6 => 6.1476, 7 => 6.9381, 9 => 7.8196])],
    ['load_type' => 'Granel sólido', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 397.28, 3 => 481.90, 4 => 521.48, 5 => 513.43, 6 => 540.12, 7 => 690.73, 9 => 735.06])],
    ['load_type' => 'Granel líquido', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 3.5064, 3 => 4.4806, 4 => 5.0413, 5 => 5.6660, 6 => 6.3776, 7 => 7.0775, 9 => 8.1032])],
    ['load_type' => 'Granel líquido', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 411.94, 3 => 503.50, 4 => 505.79, 5 => 543.13, 6 => 592.78, 7 => 718.50, 9 => 802.46])],
    ['load_type' => 'Frigorificada ou Aquecida', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 4.1335, 3 => 5.2502, 4 => 6.0468, 5 => 6.7176, 6 => 7.4125, 7 => 8.7727, 9 => 9.6599])],
    ['load_type' => 'Frigorificada ou Aquecida', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 476.88, 3 => 573.21, 4 => 622.51, 5 => 647.88, 6 => 664.97, 7 => 972.25, 9 => 983.92])],
    ['load_type' => 'Conteinerizada', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 4.3559, 3 => 4.9366, 4 => 5.4622, 5 => 6.0752, 6 => 6.9249, 7 => 7.7762])],
    ['load_type' => 'Conteinerizada', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 474.70, 3 => 487.58, 4 => 497.66, 5 => 520.21, 6 => 687.11, 7 => 723.12])],
    ['load_type' => 'Carga Geral', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 3.4102, 3 => 4.3680, 4 => 5.0055, 5 => 5.4909, 6 => 6.0684, 7 => 6.9450, 9 => 7.6865])],
    ['load_type' => 'Carga Geral', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 390.99, 3 => 478.03, 4 => 509.83, 5 => 505.56, 6 => 518.35, 7 => 692.62, 9 => 748.51])],
    ['load_type' => 'Neogranel', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 3.0784, 3 => 3.8350, 4 => 4.3719, 5 => 4.8503, 6 => 5.5083, 7 => 6.1715, 9 => 7.0978])],
    ['load_type' => 'Neogranel', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 390.99, 3 => 478.03, 4 => 509.83, 5 => 505.56, 6 => 518.35, 7 => 692.62, 9 => 748.51])],
    ['load_type' => 'Perigosa (granel sólido)', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 4.0908, 3 => 5.0398, 4 => 5.7574, 5 => 6.2170, 6 => 6.8451, 7 => 7.6497, 9 => 8.5379])],
    ['load_type' => 'Perigosa (granel sólido)', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 523.24, 3 => 607.86, 4 => 655.53, 5 => 647.48, 6 => 674.17, 7 => 828.67, 9 => 874.83])],
    ['load_type' => 'Perigosa (granel líquido)', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 4.1841, 3 => 5.1583, 4 => 5.7403, 5 => 6.3650, 6 => 7.0765, 7 => 7.7909, 9 => 8.8230])],
    ['load_type' => 'Perigosa (granel líquido)', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 548.89, 3 => 640.44, 4 => 650.82, 5 => 688.16, 6 => 737.82, 7 => 867.42, 9 => 953.22])],
    ['load_type' => 'Perigosa (frigorificada ou aquecida)', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 4.6491, 3 => 5.7658, 4 => 6.5963, 5 => 7.2671, 6 => 7.9620, 7 => 9.3406, 9 => 10.2364])],
    ['load_type' => 'Perigosa (frigorificada ou aquecida)', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 568.15, 3 => 664.49, 4 => 724.30, 5 => 749.67, 6 => 776.76, 7 => 1079.10, 9 => 1093.15])],
    ['load_type' => 'Perigosa (conteinerizada)', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 4.6634, 3 => 5.2838, 4 => 5.8094, 5 => 6.4224, 6 => 7.2863, 7 => 8.1442])],
    ['load_type' => 'Perigosa (conteinerizada)', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 556.19, 3 => 577.15, 4 => 587.23, 5 => 609.79, 6 => 780.58, 7 => 818.41])],
    ['load_type' => 'Perigosa (carga geral)', 'cost_coefficient' => 'CCD', 'unit' => '', 'number_of_axles' => json_encode([2 => 3.7177, 3 => 4.6754, 4 => 5.3528, 5 => 5.8381, 6 => 6.4156, 7 => 7.2922, 9 => 8.0337])],
    ['load_type' => 'Perigosa (carga geral)', 'cost_coefficient' => 'CC', 'unit' => '', 'number_of_axles' => json_encode([2 => 402.99, 3 => 490.03, 4 => 521.83, 5 => 517.56, 6 => 530.35, 7 => 704.62, 9 => 760.51])],
        ];

        foreach ($data as $item) {
            // Encontre o id da Resolution desejada. Exemplo: procurando pela resolução mais recente
            $resolutionId = Resolution::where('name', 'like', '%Resolução%')->latest()->first()->id;

            DB::table('capacity_loads')->insert([
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
