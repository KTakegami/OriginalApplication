<?php

use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/SelfManagerTop', function() {
    return view('index');
});

//アカウントログインページ
Route::get('/SelfManagerLogin', 'LoginController@login');
//ログイン後の処理
Route::post('/loginConp','LoginController@post');

// アカウント登録ページ
Route::get('/SelfManagerSignup', 'SignupController@signup');
//アカウント登録ページで入力した値のルーティング処理
Route::post('/conplete', 'SignupController@post');

Route::get('/CalendarTop', 'CalendarController@top');

Route::get('/ToDoTop', 'ToDoTopController@top');

