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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); 
        DB::table('categories')->truncate(); 
        DB::table('products')->truncate(); 
        DB::statement('ALTER TABLE products AUTO_INCREMENT = 1;'); 
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        
        $products = [
            [
            'name' => '腕時計',
            'price' => 15000.0,
            'brand' => 'Rolex',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'image' => '/storage/image/WMgwZOn2QJJNgTiLalrT25dZZSbMWqNNQNOAKxpB.jpg',
            'condition' => '良好',
            'user_id' => 1,
            ],

        [
            'name' => 'HDD',
            'price' => 5000.0,
            'brand' => '西芝',
            'description' => '高速で信頼性の高いハードディスク',
            'image' => '/storage/image/fVDrsi4TmBYtG14cuYngs9E8P0A8sMN0yOi6RPoj.jpg',
            'condition' => '目立った傷や汚れなし',
            'user_id' => 1,
        ],

        [
            'name' => '玉ねぎ３束',
            'price' => 300,
            'brand' => 'なし',
            'description' => '新鮮な玉ねぎ3束セット',
            'image' => '/storage/image/iLoveIMG+d.jpg',
            'condition' => 'やや傷や汚れあり',
            'user_id' => 1,
        ],

        [
            'name' => '革靴',
            'price' => 4000.0,
            'brand' => '',
            'description' => 'クラシックなデザインの革靴',
            'image' => '/storage/image/uSP0dVxMePSwIpcNuIibfMxCVPWKR46W5nXbWwhd.jpg',
            'condition' => 'やや傷や汚れあり',
            'user_id' => 1,
        ],

        [
            'name' => 'ノートPC',
            'price' => 45000.0,
            'brand' => '',
            'description' => '高性能なノートパソコン',
            'image' => '/storage/image/2106ckHdS0u8newaVlaxmznAHhTQybT3GM7eW4To.jpg',
            'condition' => '良好',
            'user_id' => 1,
        ],

        [
            'name' => 'マイク',
            'price' => 8000.0,
            'brand' => 'なし',
            'description' => '高音質のレコーディング用マイク',
            'image' => '/storage/image/bGPzwbkG4aslOzMxsg4R5jV1p68X4Q1LraW4X5xE.jpg',
            'condition' => '目立った傷や汚れなし',
            'user_id' => 2,
        ],


        [
            'name' => 'ショルダーバック',
            'price' => 3500.0,
            'brand' => '',
            'description' => 'おしゃれなショルダーバック',
            'image' => '/storage/image/TzYRHgl2Gj7xD6VOWMhyyJ0RkH8fSfK3H1ymyJX3.jpg',
            'condition' => 'やや傷や汚れあり',
            'user_id' => 2,
        ],

        [
            'name' => 'タンブラー',
            'price' => 500,
            'brand' => 'なし',
            'description' => '使いやすいタンブラー',
            'image' => '/storage/image/pNpLEt0afiDuxgpmNPZSTS3pMpH4UfPIu9EXydzr.jpg',
            'condition' => '状態が悪い',
            'user_id' => 2,
        ],

        [
            'name' => 'コーヒーミル',
            'price' => 4000.0,
            'brand' => 'Starbacks',
            'description' => '手動のコーヒーミル',
            'image' => '/storage/image/ppBwyJuk19fKC6CqeuyVcOOqQj27rMfrf7P6ej1A.jpg',
            'condition' => '良好',
            'user_id' => 2,
        ],

        [
            'name' => 'メイクセット',
            'price' => 2500.0,
            'brand' => '',
            'description' => '便利なメイクアップセット',
            'image' => '/storage/image/ppBwyJuk19fKC6CqeuyVcOOqQj27rMfrf7P6ej1A.jpg',
            'condition' => '目立った傷や汚れなし',
            'user_id' => 2,
        ],
    ];

    DB::table('products')->insert($products);
    }

}
