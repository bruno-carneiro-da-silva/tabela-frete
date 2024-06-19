<?php

use App\Models\HighPerformanceMotorVehicle;
use App\Models\Resolution;
use Illuminate\Database\Eloquent\Factories\Factory;

class HighPerformanceMotorVehicleFactory extends Factory
{
    protected $model = HighPerformanceMotorVehicle::class;

    public function definition()
    {
        return [
            'resolution_id' => Resolution::factory(),
            'load_type' => $this->faker->word,
            'cost_coefficient' => $this->faker->randomElement(['CC', 'CCD']),
            'distance' => '',
            'number_of_axles' => json_encode($this->faker->randomElements([2, 3, 4, 5, 6, 7, 9], 7)),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
