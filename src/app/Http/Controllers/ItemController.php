<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\POst;

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
    public function showdetail($item_id){

        $product = Product::findOrFail($item_id);

        return view('merchandise.item', compact('product'));

    }
    //いいねをつける//
    public function like(Product $product){
        $like = New Like();
        $like->product_id = $product->id;
        $like->user_id = $user->id;
        $like->save();

        return back();
    }

    //いいねを削除する//
    public function unlike(Product $product){
        $user = Auth::user()->id;
        $like = Like::where('product_id', $product->id)->where('user_id', $user->id)->first();
        $like->delete();
    }

    //いいねを表示するページ//
    public function detail(Product $product)
    {
        $user = Auth::user();
        $like = Like::where('product_id', $product->id)->where('user_id', $user->id)->first();
        return view('merchandise.item',compact('product','like','user'));
    }
}




/*商品一覧・商品詳細・商品購入*/
