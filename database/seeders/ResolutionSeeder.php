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
            [
                'name' => "18/01/2024, Resolução Nº 6.034 (atual)",
                'link' => "https://www.in.gov.br/en/web/dou/-/resolucao-n-6.034-de-18-de-janeiro-de-2024-538363035"
            ]
        ];

        foreach ($resolutions as $resolution) {
            Resolution::create([
                'name' => $resolution['name'],
                'link' => $resolution['link'],
            ]);
        }
    }
}
