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
Route::get('/', [ItemController::class, 'showindex']);

/*Route::middleware('auth')->group(function (){
    Route::get('/', [ItemController::class, 'index']);
    Route::post('/mypage/profile', [ProfileController::class, 'profile']);
    Route::post('/',[ProfileController::class, 'updateprofile']);
});*/


/*プロフィール設定画面・確認用*/
Route::get('/mypage/profile', [ProfileController::class, 'showprofile']);
/*プロフィール画面・確認用*/
Route::get('/mypage', [ProfileController::class, 'showprofile2']);