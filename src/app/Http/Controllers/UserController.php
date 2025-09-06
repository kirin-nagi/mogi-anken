<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Models\UserModel;

class UserController extends Controller
{

    public function register()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = $request->only(['name', 'email', 'password', 'password_confirmation']);
        User::create($user);
        $password = $request->input('password');
        $hashed_password = Hash::make('password');

        if( password === password_confirmation)
        return redirect('/');
    }

    public function login()
    {
        return view('auth.login');
    }

    /*Auth::login($user);*/
}



/*会員登録・ログイン*/