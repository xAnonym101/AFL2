<?php

namespace Database\Seeders;

use App\Models\workers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $branches = [
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Main Street, City A',
                'branch_email' => 'main_branch@example.com',
                'branch_pnumber' => '333-444-5555',
                'workers_count' => 12,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Downtown Avenue, City B',
                'branch_email' => 'downtown_branch@example.com',
                'branch_pnumber' => '222-333-4444',
                'workers_count' => 20,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Suburb Lane, City C',
                'branch_email' => 'suburb_branch@example.com',
                'branch_pnumber' => '111-222-3333',
                'workers_count' => 15,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Market Square, City D',
                'branch_email' => 'market_branch@example.com',
                'branch_pnumber' => '444-555-6666',
                'workers_count' => 18,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Parkside Boulevard, City E',
                'branch_email' => 'parkside_branch@example.com',
                'branch_pnumber' => '555-666-7777',
                'workers_count' => 22,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Riverside Drive, City F',
                'branch_email' => 'riverside_branch@example.com',
                'branch_pnumber' => '666-777-8888',
                'workers_count' => 17,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Hilltop Terrace, City G',
                'branch_email' => 'hilltop_branch@example.com',
                'branch_pnumber' => '777-888-9999',
                'workers_count' => 19,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Oceanview Parkway, City H',
                'branch_email' => 'oceanview_branch@example.com',
                'branch_pnumber' => '888-999-0000',
                'workers_count' => 14,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Lakeside Court, City I',
                'branch_email' => 'lakeside_branch@example.com',
                'branch_pnumber' => '999-000-1111',
                'workers_count' => 16,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_location' => 'Mountain View Road, City J',
                'branch_email' => 'mountainview_branch@example.com',
                'branch_pnumber' => '123-456-7890',
                'workers_count' => 13,
            ]
        ];

        foreach($branches as $items) {
            $branchID = DB::table('branches')->insertGetId($items);

            workers::factory()->count($items['workers_count'])->create(['branches_id' => $branchID]);
        }
    }
}
