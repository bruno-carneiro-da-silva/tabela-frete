<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CargoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Carga lotação',
            'Operações em que haja a contratação apenas do veículo automotor de cargas',
            'Transporte rodoviário de carga lotação de alto desempenho',
            'Operações em que haja a contratação apenas do veículo automotor de cargas de alto desempenho',
        ];

        foreach ($categories as $category) {
            DB::table('cargo_categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
