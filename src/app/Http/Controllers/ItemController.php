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
        return view('index', ['products', 'mylist']);
    }

    // 商品詳細画面を表示させる //
    public function showdetail($id){

        $product = Product::findOrFail($id);

        return view('item', compact('product'));

    }

    // 出品画面確認用 //

public function showsell(){

        return view('merchandise.sell');
    }
}




/*商品一覧・商品詳細・商品購入*/
