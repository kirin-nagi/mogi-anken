<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '腕時計',
            'price' => 15.000,
            'brand' => 'Rolex',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'image' => 'WMgwZOn2QJJNgTiLalrT25dZZSbMWqNNQNOAKxpB',
            'condition' => '良好',
        ];

        DB::table('products')->insert($param);
        $param = [
            'name' => 'HDD',
            'price' => 5.000,
            'brand' => '西芝',
            'description' => '高速で信頼性の高いハードディスク',
            'image' => 'fVDrsi4TmBYtG14cuYngs9E8P0A8sMN0yOi6RPoj',
            'condition' => '目立った傷や汚れなし',
        ];
    }
}
