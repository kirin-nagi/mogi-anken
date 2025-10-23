<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Like;
use App\Models\User;
use App\Models\Comment;

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

    // 出品ボタンから出品画面に行く設定 //
    public function showsell()
    {
        return view('merchandise.sell');
    }
}




/*商品一覧・商品購入*/
