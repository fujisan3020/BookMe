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
Route::get('/login', 'Auth\LoginController@add')->name('login');

//アカウント作成画面の表示
Route::get('/register', 'Auth\RegisterController@add');


Route::group(['middleware' => 'auth'], function() {
  //レビューの一覧表示(検索表示を含め)
  Route::get('/', 'ReviewController@index');

  //ナビバーからのレビュー一覧の表示
  Route::get('/business_economy', 'ReviewController@business_economy');
  Route::get('/society_politics', 'ReviewController@society_politics');
  Route::get('/investment_finance', 'ReviewController@investment_finance');
  Route::get('/nature_environment', 'ReviewController@nature_environment');
  Route::get('/history_geography', 'ReviewController@history_geography');
  Route::get('/culture_thought', 'ReviewController@culture_thought');
  Route::get('/education_selfdevelopment', 'ReviewController@education_selfdevelopment');
  Route::get('/science_technology', 'ReviewController@science_technology');
  Route::get('/travel', 'ReviewController@travel');
  Route::get('/sports_outdoor', 'ReviewController@sports_outdoor');
  Route::get('/other', 'ReviewController@other');

  //レビュー内容の表示
  Route::get('/content', 'ReviewController@content');

  //役に立ったボタンへの投票と取り消し
  Route::get('/content/helpful/create', 'HelpfulController@create');
  Route::get('/content/helpful/delete', 'HelpfulController@delete');

  //レビュー作成画面の表示
  Route::get('/review/create', 'ReviewController@create');
  //入力されたレビューの確認
  Route::post('/review/create', 'ReviewController@confirm');
  //レビュー作成画面に戻る
  Route::get('/review/confirm/back', 'ReviewController@back');
  //レビュー作成・投稿
  Route::post('/review/confirm', 'ReviewController@store');


  //マイレビュー画面の表示
  Route::get('/myreview', 'ReviewController@myreview_show');
  //マイレビュー編集画面の表示
  Route::get('/myreview/edit', 'ReviewController@edit');
  //マイレビュー更新
  Route::post('/myreview/edit', 'ReviewController@update');
  //マイレビュー削除
  Route::get('/myreview/delete', 'ReviewController@delete');


  //マイアカウント表示
  Route::get('/myaccount', 'UserController@show');
  //マイアカウント更新
  Route::post('/myaccount', 'UserController@update');
  //マイアカウント削除
  Route::get('/myaccount/delete', 'UserController@delete');
  //ログアウト処理
  Route::get('/logout', 'UserController@logout');


});
