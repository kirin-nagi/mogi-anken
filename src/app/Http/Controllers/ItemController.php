<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function showindex()
    {
        return view('index');
    }

    public function index()
    {
        
        return view('index');
    }

    public function showsell(){

        return view('merchandise.sell');
    }
}




/*商品一覧・商品詳細・商品購入*/
