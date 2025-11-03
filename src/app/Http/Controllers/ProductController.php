<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExhibitionRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Comment;
use App\Models\Sell;

class ProductController extends Controller
{
    // 商品詳細画面を表示させる //
    public function showdetail($item_id){

        $product = Product::findOrFail($item_id);

        $categories = Sell::all();

        return view('merchandise.item', compact('product','categories'));
    }

    // 出品画面表示 //
    public function showsell()
    {
        return view('merchandise.sell');
    }

    // 出品する為の設定  //
    public function create(ExhibitionRequest $request){

        $user = Auth::user();

        $path = null;
        if($request->hasFile('image')){
            $path = $request->file('image')->store('image', 'public');
        }

        $product = Product::create([
            'user_id' => $user->id,
            'image' => "/storage/".$path,
            'condition' => $request->condition,
            'name' => $request->name,
            'brand' => $request->brand,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        //auth機能を加える//
        
        if(!empty($request->category_name)){

            foreach($request->category_name as $categoryName){
            Sell::create([
            'name' => $categoryName,
            'category_name' => $categoryName,
            'product_id' => $product->id,
        ]);
        }
    }

        return redirect('/mypage');
    }

    public function sell() {
    $products = Product::where('user_id', Auth::id())->get();
    
    return view('page.sell');
    }

}