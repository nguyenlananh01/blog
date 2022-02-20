<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //query builder
        DB::table('product')->insert([
            [
                'name'=>'iPhone-X',
                'slug'=> 'iphone-x',
                'price'=> 1000000,
                'description'=>'You may type-hint any dependencies you need within the',
                'avata'=>'https://didongviet.vn/pub/media/catalog/product//i/p/iphone-x-mau-xam-didongviet.jpg'
            ],
            [
                'name'=>'iPhone-11',
                'slug'=> 'iphone-11',
                'price'=> 2000000,
                'description'=>'You may type-hint any dependencies you need within the',
                'avata'=>'https://didongviet.vn/pub/media/catalog/product//i/p/iphone-x-mau-xam-didongviet.jpg'
            ]

        ]);
    }
}
