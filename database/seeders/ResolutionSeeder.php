<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resolution;

class ResolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $resolutions = [
            // Adicione seus nomes de resoluções aqui
                ['name' => "18/01/2024, Resolução Nº 6.034 (atual)"],
        ];

        foreach ($resolutions as $resolution) {
            Resolution::create($resolution);
        }
    }
}
