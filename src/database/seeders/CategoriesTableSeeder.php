<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'product_id' => 1,
            'category_name' => '家電',
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 1,
            'category_name' => 'メンズ'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 2,
            'category_name' => '家電'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 4,
            'category_name' => 'メンズ'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 5,
            'category_name' => '家電'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 6,
            'category_name' => '家電'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 7,
            'category_name' => 'レディース'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 7,
            'category_name' => 'ファッション'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 8,
            'category_name' => 'キッチン'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 9,
            'category_name' => 'キッチン'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 10,
            'category_name' => 'レディース'
        ];

        DB::table('categories')->insert($param);
        $param = [
            'product_id' => 11,
            'category_name' => 'コスメ'
        ];
    }
}
