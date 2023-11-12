<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "furniture_name"=>fake()->words(2),
            "stocks"=>fake()->numberBetween(10, 50),
            "color_available"=>fake()->numberBetween(1, 5)
        ];
    }
}
