<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Http\Requests\ProfileRequest;


class ProfileController extends Controller
{
    /*プロフィール設定画面・確認用*/
    public function showprofile(){

        return view('user.edit');
    }

    public function showprofile2(){

        return view('user.profile');
    }

    public function updateprofile(ProfileRequest $request)
    {
        $user = Auth::user();

        $address = Address::where('user_id', $user->id)->first();
        if($address){
            $address->update([
            'name'=> $request->name,
            'postcode' =>$request->postcode,
            'address' =>$request->address,
            'building'=>$request->building ??null,
        ]);
        } else {
            Address::create([
                'user_id' => $user->id,
                'name' => $request->name,
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
}



/*アイコンも設定する？*/
/* profile画面・編集画面*/