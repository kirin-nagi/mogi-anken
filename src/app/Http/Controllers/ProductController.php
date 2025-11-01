<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExhibitionRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Comment;

class ProductController extends Controller
{
    // 商品詳細画面を表示させる //
    public function showdetail($item_id){

        $product = Product::findOrFail($item_id);

        return view('merchandise.item', compact('product'));
    }

    // 出品画面表示 //
    public function showsell()
    {
        return view('merchandise.sell');
    }

    // 出品する為の設定  //
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
            'image' => "/storage/".$path,
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
    
    return view('page.sell', );
}

    
}

//商品詳細・いいね・コメント//
