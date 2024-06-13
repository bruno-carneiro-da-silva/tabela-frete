<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            [
                'name' => "18/01/2024, Resolução Nº 6.034 (atual)",
                'name' => "28/08/2023, Portaria Nº 20",
                'name' => "21/08/2023, Portaria Nº 19",
                'name' => "20/07/2023, Resolução Nº 6.022",
                'name' => "05/06/2023, Portaria Nº 13",
                'name' => "22/05/2023, Portaria Nº 11",
                'name' => "25/04/2023, Portaria Nº 8",
                'name' => "17/02/2023, Portaria Nº 5",
                'name' => "19/01/2023, Resolução Nº 6.006 ",
                'name' => "03/10/2022, Portaria SUROC nº 219",
                'name' => "22/08/2022, Portaria Nº 214",
                'name' => "20/07/2022, Resolução Nº 5.985",
                'name' => "24/06/2022, Portaria Nº 210",
                'name' => "18/03/2022, Portaria Nº 169",
                'name' => "21/01/2022, Resolução Nº 5.959",
                'name' => "21/10/2021, Portaria Nº 496",
                'name' => "14/07/2021, Resolução Nº 5.949",
                'name' => "03/03/2021, Portaria Nº 90",
                'name' => "18/01/2021, Resolução Nº 5.923",
                'name' => "03/11/2020, Portaria Nº 399",
                'name' => "14/07/2020, Resolução Nº 5.899",
                'name' => "26/05/2020, Resolução Nº 5.890",
                'name' => "14/01/2020, Resolução Nº 5.867",
            ],
            // Repita para outras resoluções
        ];

        foreach ($resolutions as $resolution) {
            Resolution::create($resolution);
        }
    }
}
