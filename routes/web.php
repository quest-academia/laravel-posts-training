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


//トップページ表示
Route::get('/', 'PostsController@index');

//認証機能
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//プロフィール編集画面
Route::get('/users/edit', 'UsersController@edit');

//プロフィール更新画面
Route::post('/users/update', 'UsersController@update');

//プロフィールページの表示
Route::get('/users/{user_id}', 'UsersController@show');
