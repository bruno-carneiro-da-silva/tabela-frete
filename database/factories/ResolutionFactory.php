<?php

use App\Models\Resolution;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResolutionFactory extends Factory
{
    protected $model = Resolution::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'link' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
