<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    /*プロフィール設定画面・確認用*/
    public function showprofile(){

        return view('user.edit');
    }

    public function profile()
    {
        return view('user.edit');
    }

    public function updateprofile()
    {
        $addresses=Addresses::update([
            'id' =>$user['id'],
            'name'=> $request->name,
            'postcode' =>$request->postcode,
            'address' =>$request->address,
            'building'=>$request->building ??null,
        ]);
        return redirect('/');
    }


}


/*アイコンも設定する？*/
/* profile画面・編集画面*/