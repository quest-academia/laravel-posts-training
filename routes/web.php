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

//Route::get('/', function () {
  //  return view('welcome');
//});

//投稿一覧画面
//Route::group(['middleware' => 'auth'],function(){
    Route::get('/','PostsController@index')->name('top');
//});

//ユーザ新規登録画面
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

//投稿新規作成
//Route::group(['middleware' => 'auth'],function(){
    Route::get('posts/create','PostsController@create')->name('create');
    Route::post('posts','PostsController@store')->name('store');
//});

//ユーザログイン画面
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('users/{id}','UsersController@show')->name('show');
