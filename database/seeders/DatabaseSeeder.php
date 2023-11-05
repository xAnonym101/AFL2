<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\branches;
use App\Models\workers;
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


        branches::factory()
            ->count(3)
            ->has(workers::factory()->count(5))
            ->create();

        $branches = branches::all();

        foreach ($branches as $branch) {
            $branch->update([
                'workers_count' => $branch->workers->count(),
            ]);
        }
    }
}
