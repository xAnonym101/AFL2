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
                'branch_ig' => 'main_street_citya_ig',
                'branch_location' => 'Main Street, City A',
                'branch_email' => 'main_branch@example.com',
                'branch_pnumber' => '333-444-5555',
                'workers_count' => 12,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_ig' => 'downtown_avenue_cityb_ig',
                'branch_location' => 'Downtown Avenue, City B',
                'branch_email' => 'downtown_branch@example.com',
                'branch_pnumber' => '222-333-4444',
                'workers_count' => 20,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_ig' => 'suburb_lane_cityc_ig',
                'branch_location' => 'Suburb Lane, City C',
                'branch_email' => 'suburb_branch@example.com',
                'branch_pnumber' => '111-222-3333',
                'workers_count' => 15,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_ig' => 'market_square_cityd_ig',
                'branch_location' => 'Market Square, City D',
                'branch_email' => 'market_branch@example.com',
                'branch_pnumber' => '444-555-6666',
                'workers_count' => 18,
            ],
            [
                "branch_picture" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSg1WHtlzYlHhFZ5LwiDG7rQ1zRqv4EenfOoQ&usqp=CAU",
                'branch_ig' => 'parkside_boulevard_citye_ig',
                'branch_location' => 'Parkside Boulevard, City E',
                'branch_email' => 'parkside_branch@example.com',
                'branch_pnumber' => '555-666-7777',
                'workers_count' => 22,
            ],
        ];
        

        foreach($branches as $items) {
            $branchID = DB::table('branches')->insertGetId($items);

            workers::factory()->count($items['workers_count'])->create(['branches_id' => $branchID]);
        }
    }
}
