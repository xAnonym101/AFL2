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
                'products_picture'=> 'https://res.cloudinary.com/ruparupa-com/f_auto,q_auto/v1652942957/Products/10444069_1.jpg',
                'furniture_name' => 'Sofa',
                'price' => 500,
                'stocks' => 20,
            ],
            [
                'products_picture'=> 'https://cb2.scene7.com/is/image/CB2/DondraQueenBedSHS21_1x1',
                'furniture_name' => 'Bed',
                'price' => 800,
                'stocks' => 15,
            ],
            [
                'products_picture' => 'https://5.imimg.com/data5/ANDROID/Default/2020/12/GM/HI/NA/12502003/product-jpeg.png',
                'furniture_name' => 'Dining Table',
                'price' => 300,
                'stocks' => 30,
            ],
            [
                'products_picture' => 'https://assets.wfcdn.com/im/15144401/resize-h500-w750%5Ecompr-r85/5575/55757428/default_name.jpg',
                'furniture_name' => 'Desk',
                'price' => 200,
                'stocks' => 25,
            ],
            [
                'products_picture' => 'https://m.media-amazon.com/images/I/71IFx5CMNOL._AC_UF894,1000_QL80_.jpg',
                'furniture_name' => 'Bookshelf',
                'price' => 150,
                'stocks' => 18,
            ],
            [
                'products_picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM3G0MwJVovWaXJpqEmTUMa2R4RWJ8MgLYOw&usqp=CAU',
                'furniture_name' => 'Coffee Table',
                'price' => 250,
                'stocks' => 22,
            ],
            [
                'products_picture' => 'https://www.mfaonline.co.za/wp-content/uploads/2022/07/mwbr855_48_f.jpg',
                'furniture_name' => 'Wardrobe',
                'price' => 700,
                'stocks' => 12,
            ],
            [
                'products_picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUFsTETPGr6zzaadjGI63YYF74uO-Va6bwqg&usqp=CAU',
                'furniture_name' => 'Chair',
                'price' => 50,
                'stocks' => 40,
            ],
            [
                'products_picture' => 'https://m.media-amazon.com/images/I/81VN5iUNCmL._AC_UF1000,1000_QL80_DpWeblab_.jpg',
                'furniture_name' => 'TV Stand',
                'price' => 350,
                'stocks' => 15,
            ],
            [
                'products_picture' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBMiq8TaSaIb_lLOB5faLuJwJb5JBd9ZHGeg&usqp=CAU',
                'furniture_name' => 'Nightstand',
                'price' => 80,
                'stocks' => 30,
            ],
        ];

        foreach ($furniture as $items) {
            DB::table('products')->insert($items);
        }
    }
}
