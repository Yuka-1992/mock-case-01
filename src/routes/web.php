<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ItemController::class,'index']);
Route::get('/login', [LoginController::class,'index']);// ページの確認に使用
Route::get('/register', [UserController::class,'index']);
Route::post('/register', [UserController::class,'register']);
Route::get('/mypage/profile', [UserController::class,'profile']);
Route::post('/mypage/profile', [UserController::class,'update']);
Route::get('/mypage', [UserController::class,'mypage']);
Route::get('/session', [LoginController::class,'getSes']);// ログイン機能は未実装
Route::post('/session', [LoginController::class,'postSes']);// ログイン機能は未実装
Route::get('/set', [ItemController::class,'set']);// laravelのwelcomeページ用に使用