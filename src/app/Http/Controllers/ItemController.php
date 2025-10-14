<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ItemController extends Controller
{
    // 商品一覧のログイン判定ありなし設定　//
    public function index()
    {
        $products = Product::all();

        if(Auth::check()){

            $mylist = Auth::user()->likes;
        }else{
            $mylist = collect();
        }
        return view('index', compact('products', 'mylist'));
    }
    // 出品ボタンから出品画面に行く設定 //
    public function create(){

        return view('merchandise.sell');
    }

    // 商品詳細画面を表示させる //
    public function detail($id){

        $product = Product::findOrFail($id);

        return view('merchandise.item', compact('product'));

    }
    // 詳細画面確認用 //
    public function item()
    {
        return view('merchandise.item');
    }
}




/*商品一覧・商品詳細・商品購入*/
