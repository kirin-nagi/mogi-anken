<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ExhibitionRequest;
use App\Models\Product;
use App\Models\User;
use App\Models\Sell;


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

        /*indexのおすすめに表示*/
        $products = Product::all();

        return view('index', compact('products'));
    }

}




/*商品一覧・商品購入*/
