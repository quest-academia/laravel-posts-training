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

// 投稿一覧ページへ
Route::get('/', 'PostsController@index');
// 投稿新規作成ページへ
Route::get('posts/new', 'PostsController@create')->name('posts.create');
// 投稿するボタン押下後の処理をstoreアクションへ指定
Route::post('posts/store', 'PostsController@store')->name('posts.store');

// Authのルーティング
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// 重複を避けるためのexcept
Route::resource('posts', 'PostsController', ['except' => ['index','create','store']]);

