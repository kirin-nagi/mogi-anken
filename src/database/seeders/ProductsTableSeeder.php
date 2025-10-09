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
        DB::table('products')->insert([
            [
                'name' => '腕時計',
                'price' => '15.000',
                'brand' => 'Rolax',
                'description' =>'スタイリッシュなデザインのメンズ腕時計',
                'image' => 'storage/img/Armani+Mens+Clock.jpg',
                'condition' => '良好',
            ],
            [
                'name' => 'HDD',
                'price' => '5.000',
                'brand' => '西芝',
                'description' =>'高速で信頼性の高いハードディスク',
                'image' => 'storage/img/HDD+Hard+Disk.jpg',
                'condition' => '目立った傷や汚れなし',
            ],
            [
                'name' => '玉ねぎ３束',
                'price' => '300',
                'brand' => 'なし',
                'description' =>'新鮮な玉ねぎ３束のセット',
                'image' => 'storage/img/iLoveIMG+d.jpg',
                'condition' => 'やや傷や汚れあり',
            ],
            [
                'name' => '革靴',
                'price' => '4000',
                'brand' => '',
                'description' =>'クラシックなデザインの革靴',
                'image' => 'storage/img/Leather+Shoes+Product+Photo.jpg',
                'condition' => '状態が悪い',
            ],
            [
                'name' => 'ノートPC',
                'price' => '45.000',
                'brand' => '',
                'description' =>'高性能なノートパソコン',
                'image' => 'storage/img/Living+Room+Laptop.jpg',
                'condition' => '良好',
            ],
            [
                'name' => 'マイク',
                'price' => '8.000',
                'brand' => 'なし',
                'description' =>'高音質のレコーディング用マイク',
                'image' => 'storage/img/Music+Mic+4632231.jpg',
                'condition' => '目立った傷や汚れなし',
            ],
            [
                'name' => 'ショルダーバック',
                'price' => '3.500',
                'brand' => '',
                'description' =>'おしゃれなショルダーバック',
                'image' => 'storage/img/Purse+fashion+pocket.jpg',
                'condition' => 'やや傷や汚れあり',
            ],
            [
                'name' => 'タンブラー',
                'price' => '500',
                'brand' => 'なし',
                'description' =>'使いやすいタンブラー',
                'image' => 'storage/img/Tumbler+souvenir.jpg',
                'condition' => '状態悪い',
            ],
            [
                'name' => 'コーヒーミル',
                'price' => '4.000',
                'brand' => 'Starbacks',
                'description' =>'手動のコーヒーミル',
                'image' => 'storage/img/Waitress+with+Coffee+Grinder.jpg',
                'condition' => '良好',
            ],
            [
                'name' => 'メイクセット',
                'price' => '2.500',
                'brand' => '',
                'description' =>'便利なメイクアップセット',
                'image' => 'storage/img/makeup.jpg',
                'condition' => '目立った傷や汚れなし',
            ],
        ]);
    }
}
