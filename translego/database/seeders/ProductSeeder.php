<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=0; $i<10; $i++){
            DB::table('products')->insert([
                'category_id' => 1,
                'name' => 'Taban Plaka - Beyaz',
                'is_active' => 1,
                'count' => 15,
                'price' => 15,
                'image_path' => '/storage/shop-products/tabanplaka-beyaz-2.png',
            ]);
        }
        
    }
}
