<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ItemRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;

class UserController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        Auth::login($user);
        return redirect('/mypage/profile');
    }

    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        return view('/');
    }

}



/*会員登録・ログイン*/

/* 会員登録画面で入力後のログイン処理が出来ずに止まってる */