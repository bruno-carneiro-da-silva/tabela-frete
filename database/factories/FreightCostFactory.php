<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FreightCost>
 */
class FreightCostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cargo_type_id' => \App\Models\CargoType::factory(),
            'cost_coefficient_id' => \App\Models\CostCoefficient::factory(),
            'resolution_id' => \App\Models\Resolution::factory(),
            'kilometers' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
