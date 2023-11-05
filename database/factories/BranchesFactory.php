<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\branches>
 */
class BranchesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'branch_location' => fake()->name(),
            'branch_email' => fake()->unique()->safeEmail(),
            'branch_pnumber' => fake()->phoneNumber(),
            "workers_count" => 0,
            "products_count" => 0,
        ];
    }
}
