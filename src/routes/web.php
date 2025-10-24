<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ItemController::class, 'index'])->name('index');
Route::get('/item/{item_id}',[ProductController::class, 'showdetail'])->name('item.show');/*商品詳細画面*/
/*Route::get('/item/{item_id}', [ItemController::class, 'detail']);*/
Route::post('/item/{item_id}',[ProductController::class, 'detail'])->name('like');
Route::delete('/item/{item_id}',[ProductController::class, 'detail'])->name('unlike');
Route::post('/item/{item_id}/comment',[ProductController::class, 'store'])->name('comment');
Route::get('/?tab=mylist',[ItemController::class, 'mylist']);
Route::post('/mypage?page=sell',[ItemController::class, 'create']);/*middlewareの中に後で入れる*/

Route::middleware('auth')->group(function (){
    Route::post('/mypage/profile', [ProfileController::class, 'profile']);
    Route::post('/',[ProfileController::class, 'updateprofile']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);
});


/*プロフィール設定画面・確認用*/
Route::get('/mypage/profile', [ProfileController::class, 'showprofile']);
/*プロフィール画面・確認用*/
Route::get('/mypage', [ProfileController::class, 'showprofile2']);
/*商品出品画面・確認用*/
Route::post('/sell',[ItemController::class, 'showsell']);
/*送付先住所変更画面確認用*/
Route::get('/purchase/address/{item_id}', [UserController::class, 'showaddress']);