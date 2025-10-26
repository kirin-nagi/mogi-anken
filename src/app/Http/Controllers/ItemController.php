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
    }

    // 出品画面表示 //
    public function showsell()
    {
        return view('merchandise.sell');
    }

    // 出品する為の設定 //
    public function store(ExhibitionRequest $request){

        $sell = Sell::create([
            'category_name' => $request->category_name,
        ]);

        $Product = Product::create([
            'image' => $request->image,
            'condition' => $request->condition,
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        //auth機能を加える//

        return view('/mypage?page=sell');
    }
}




/*商品一覧・商品購入*/
