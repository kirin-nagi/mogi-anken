<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        
        return redirect('/mypage/profile');
    }

    public function showlogin()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user_info = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if(Auth::attempt($user_info)) {
            $request->session()->regenerate();
            return redirect('index');
    }

    return redirect()->route('/login');
    }

}



/*会員登録・ログイン*/

/* ログイン処理が出来ずに止まってる */