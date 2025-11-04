<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Product;
use App\Http\Requests\ProfileRequest;


class ProfileController extends Controller
{
    /*プロフィール設定画面・確認用*/
    public function showprofile(){

        $user = Auth::user();
        $address = Address::where('user_id', $user->id)->first();

        return view('user.edit', compact('address'));
    }

    public function updateprofile(ProfileRequest $request)
    {
        $user = Auth::user();

        $path = null;
        if($request->hasFile('image')){
            $path = $request->file('image')->store('image', 'public');
        }

        $address = Address::where('user_id', $user->id)->first();
        if($address){
            $address->update([
            'name'=> $request->name,
            'image'=>$path ??null,
            'postcode' =>$request->postcode,
            'address' =>$request->address,
            'building'=>$request->building ??null,
        ]);
        } else {
            Address::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'image' => $path ??null,
                'postcode' => $request->postcode,
                'address' => $request->address,
                'building' => $request->building ?? null,
            ]);
        }

        $user->update([
            'name' =>$request->name,
        ]);

        return redirect('/');

    }


    public function showprofile2()
    {
        $user = Auth::user();
        $address = Address::where('user_id', $user->id)->first();

        return view('user.profile', compact('user','address'));

        $products = Product::where('user_id', Auth::id())->get();

        return view('user.profile', compact('products'));
    }

    public function edit()
    {
        return view('user.edit');
    }
}