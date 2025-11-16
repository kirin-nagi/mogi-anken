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
    /* 会員登録画面 */
    public function store(RegisterRequest $request)
    {
        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        Auth::login($user);
        return redirect('/mypage/profile');
    }
    /*プロフィール設定画面*/
    public function update(ProfileRequest $request, $id)
    {
        $address = Address::findOrFail($id);

        Address::update([
            'name'=>$request->name,
            'postcode'=>$request->postcode,
            'address'=>$request->address,
        ]);

        return redirect()->route('index');
    }

    /*ログイン画面表示*/
    public function showlogin()
    {
        return view('auth.login');
    }
    /*ログイン画面 */
    public function login(LoginRequest $request)
    {

        $user_info = $request->validated();

        if(Auth::attempt($user_info)) {
            $request->session()->regenerate();
            return redirect('/');
    }

    return redirect()->route('login');
    }
    /*ログアウト処理*/
    public function logout()
    {
        return view('auth.login');
    }

    /*送付先住所変更画面確認用*/
    public function showaddress(){

        return view('user.address');
    }

}



/*会員登録・ログイン*/
