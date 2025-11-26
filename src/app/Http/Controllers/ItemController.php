<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
use App\Models\Sell;


class ItemController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            if ($request->query('tab') === 'mylist') {
                $products = $user->getLikedProducts($user->id);
                return view('page.mylist', compact('products'));
            } else {
                $products = Product::where('user_id', '!=', $user->id)->get();
            }
        } else {
            $products = Product::all();
        }

        return view('index', compact('products'));
    }

    public function sell()
    {
        $products = Product::where('user_id', Auth::id())->get();
        return view('page.sell', compact('products'));
    }

}




/*商品一覧・商品購入・*/
