<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $furniture = [
            [
                'furniture_name' => 'Sofa',
                'price' => 500,
                'stocks' => 20,
            ],
            [
                'furniture_name' => 'Bed',
                'price' => 800,
                'stocks' => 15,
            ],
            [
                'furniture_name' => 'Dining Table',
                'price' => 300,
                'stocks' => 30,
            ],
            [
                'furniture_name' => 'Desk',
                'price' => 200,
                'stocks' => 25,
            ],
            [
                'furniture_name' => 'Bookshelf',
                'price' => 150,
                'stocks' => 18,
            ],
            [
                'furniture_name' => 'Coffee Table',
                'price' => 250,
                'stocks' => 22,
            ],
            [
                'furniture_name' => 'Wardrobe',
                'price' => 700,
                'stocks' => 12,
            ],
            [
                'furniture_name' => 'Chair',
                'price' => 50,
                'stocks' => 40,
            ],
            [
                'furniture_name' => 'TV Stand',
                'price' => 350,
                'stocks' => 15,
            ],
            [
                'furniture_name' => 'Nightstand',
                'price' => 80,
                'stocks' => 30,
            ],
            // Add more furniture items as needed
        ];

        foreach ($furniture as $items) {
            DB::table('products')->insert($items);
        }
    }
}
