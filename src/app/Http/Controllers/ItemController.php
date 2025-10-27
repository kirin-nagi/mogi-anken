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

    // 出品画面表示 //
    public function showsell()
    {
        return view('merchandise.sell');
    }

    // 出品する為の設定 //
    public function create(ExhibitionRequest $request){

        $path = null;
        if($request->hasFile('image')){
            $path = $request->file('image')->store('image', 'public');
        }
        
        if(!empty($request->category_name)){

            foreach($request->category_name as $categoryName){
            Sell::create([
            'category_name' => $categoryName,
        ]);
        }
    }

        Product::create([
            'image' => $path,
            'condition' => $request->condition,
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        //auth機能を加える//

        return redirect()->route('mypage.sell');
    }

    public function sell() {
    $products = Product::all();
    
    return view('page.sell', compact('products'));
}
}




/*商品一覧・商品購入*/
