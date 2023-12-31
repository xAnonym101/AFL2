<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\workers>
 */
class WorkersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'age'=> fake()->numberBetween(24, 45),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'marital' => fake()->randomElement(['Single', 'Married']),
        ];
    }
}
