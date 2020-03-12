<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//ログイン画面の表示
Route::get('/login', 'Auth\LoginController@add');

//アカウント作成画面の表示
Route::get('/register', 'Auth\RegisterController@add');


Route::group(['middleware' => 'auth'], function() {
//レビューの一覧表示
Route::get('/', 'ReviewController@index');

//ナビバーからのレビュー一覧の表示
Route::get('/search', 'ReviewController@business_economy');


//レビュー作成画面の表示
Route::get('/review/create', 'ReviewController@add');
//入力されたレビューの確認
Route::post('/review/confirm', 'ReviewController@confirm');
//レビュー作成・投稿
Route::post('/review/create', 'ReviewController@create');
});
