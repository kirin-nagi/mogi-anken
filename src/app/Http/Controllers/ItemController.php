<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function showsell(){

        return view('merchandise.sell');
    }

    // 商品画像を表示させる //
    public function showdetail($id){

        $product = Product::findOrFail($id);

        return view('item', compact('products'));

    }
}




/*商品一覧・商品詳細・商品購入*/
