<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Sell;

class CategoryController extends Controller
{
    public function showdetail($id)
    {
        $product = Product::with('categories')->findOrFail($id);

        return view('item.show', compact('product'));
    }
}
