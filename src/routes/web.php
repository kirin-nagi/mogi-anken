<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'showlogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ItemController::class, 'index']);
Route::get('/item/{item_id}',[ItemController::class, 'index']);

/*Route::middleware('auth')->group(function (){
    Route::get('/', [ItemController::class, 'index']);
    Route::post('/mypage/profile', [ProfileController::class, 'profile']);
    Route::post('/',[ProfileController::class, 'updateprofile']);
    Route::get('/item/{item_id}',[ItemController::class, 'item']);
});*/


/*プロフィール設定画面・確認用*/
Route::get('/mypage/profile', [ProfileController::class, 'showprofile']);
/*プロフィール画面・確認用*/
Route::get('/mypage', [ProfileController::class, 'showprofile2']);
/*商品出品画面・確認用*/
Route::get('/sell',[ItemController::class, 'showsell']);
/*送付先住所変更画面確認用*/
Route::get('/purchase/address/{item_id}', [UserController::class, 'showaddress']);