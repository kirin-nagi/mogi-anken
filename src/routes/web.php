<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PurchaseController;

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
Route::post('/mypage/profile', [ProfileController::class, 'updateprofile'])->name('mypage.profile');
Route::get('/login', [UserController::class, 'showlogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/', [ItemController::class, 'index'])->name('index');
Route::get('/item/{item_id}',[ProductController::class, 'showdetail'])->name('item.show');/*商品詳細画面*/
Route::get('/?tab=mylist',[ItemController::class, 'mylist']);/*<-ここのクリエも変更*/
Route::get('/',[ProductController::class, 'search'])->name('search');/*検索*/


Route::middleware('auth')->group(function (){
    Route::post('/',[ProfileController::class, 'updateprofile']);
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::get('/sell',[ProductController::class, 'showsell']);
    Route::get('/mypage',[ProductController::class, 'sell'])->name('mypage.sell');
    Route::post('/mypage',[ProductController::class, 'create'])->name('mypage.create');
    Route::post('/item/{item_id}/comment',[LikeController::class, 'comment'])->name('comment');
    Route::post('/item/{item_id}',[LikeController::class, 'like'])->name('like');
    Route::delete('/item/{item_id}',[LikeController::class, 'unlike'])->name('unlike');
    Route::get('/purchase/{item_id}', [PurchaseController::class, 'showpurchase'])->name('merchandise.purchase');
});


/*プロフィール設定画面・確認用*/
Route::get('/mypage/profile', [ProfileController::class, 'editprofile']);
/*プロフィール画面・確認用*/
Route::get('/mypage', [ProfileController::class, 'showprofile']);

/*送付先住所変更画面確認用*/
Route::get('/purchase/address/{item_id}', [UserController::class, 'showaddress']);