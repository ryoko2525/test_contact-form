<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
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




//管理画面
Route::get('/admin', [ContactController::class, 'admin']);

// 検索機能
Route::get('/search', [ContactController::class, 'search']);


// 完了//
// お問い合わせ関連のルート
Route::get('/', [ContactController::class, 'index']);//お問い合わせフォーム入力
Route::post('/confirm', [ContactController::class, 'confirm']);//確認画面
Route::post('/thanks', [ContactController::class, 'submitForm']); //サンクスページ





