<?php

namespace Database\Factories;
use App\Models\CargoCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CargoCategory>
 */
class CargoCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CargoCategory::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true), // Gera uma string de 3 palavras
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
