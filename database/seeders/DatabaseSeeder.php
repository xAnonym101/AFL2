<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use App\Models\branches;
use App\Models\workers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        $this->call(BranchesSeeder::class);
        $this->call(ProductsSeeder::class);

        $branchesCount = DB::table("branches")->count();
        $products = DB::table("products")->get();

        foreach ($products as $item) {
            for ($i = 0; $i < 10; $i++)
            DB::table("branches_products")->insert([
                "branches_id"=> rand(1, $branchesCount),
                "products_id"=> $item->id,
            ]);
        }
    }
}
