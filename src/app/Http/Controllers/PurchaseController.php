<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PurchaseRequest;
use App\Models\Product;
use App\Models\Address;


class PurchaseController extends Controller
{
    public function showpurchase($item_id)
    {

        $product = Product::findOrFail($item_id);

        $user = Auth::user();

        $address = Address::where('user_id', $user->id)->first();

        return view('merchandise.purchase', compact('product','address'));
    }
}
