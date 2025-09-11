<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    /*プロフィール設定画面・確認用*/
    public function showprofile(){

        return view('user.edit');
    }


}



/* profile画面・編集画面*/