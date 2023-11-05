<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

<<<<<<< Updated upstream
use App\Models\shop_branches;
use Database\Factories\ShopBranchesFactory;
=======
use App\Models\branches;
>>>>>>> Stashed changes
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

<<<<<<< Updated upstream
        shop_branches::factory(5)->create();
=======
        branches::factory()->count(3)->create();
>>>>>>> Stashed changes
    }
}
