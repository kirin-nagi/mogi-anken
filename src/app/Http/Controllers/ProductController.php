<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Like;
use App\Models\User;
use App\Models\Comment;

class ProductController extends Controller
{
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

    //コメント投稿処理//
    public function store(Request $request, $item_id)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->product_id = $item_id;
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect("/item/{$item_id}");
    }
}

//商品詳細・いいね・コメント//
