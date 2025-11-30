<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Models\Like;
use App\Models\Product;
use App\Models\Comment;

class LikeController extends Controller
{
    public function like($item_id){

        $user = Auth::user();

        ($existing = Like::where('product_id', $item_id)->where('user_id', $user->id)->first());

        if(!$existing){
            $like = New Like();
            $like->product_id = $item_id;
            $like->user_id = $user->id;
            $like->save();
        }

        return back();
    }

    public function unlike($item_id)
{

    $user = Auth::user();

    $like = Like::where('product_id', $item_id)
                ->where('user_id', $user->id)
                ->first();

    if ($like) {
        $like->delete();
    }

    return back();
}

    public function detail($item_id)
    {
        $product = Product::with('likes')->findOrFail($item_id);
        $user = Auth::user();
        $like = Like::where('product_id', $product->id)->where('user_id', $user->id)->first();

        return view('merchandise.item',compact('product','like','user'));
    }

    public function comment(CommentRequest $request, $item_id)
    {
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->product_id = $item_id;
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect("/item/{$item_id}");
    }
}
