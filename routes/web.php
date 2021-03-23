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

Route::get('/', 'PostsController@index')->name('top');

// 新規投稿
Route::get('posts/create', 'PostsController@create')->name('create');
Route::post('posts', 'PostsController@store')->name('store');

// 詳細画面一覧
Route::get('posts/{id}', 'PostsController@show')->name('show');

// 編集画面
Route::get('posts/{id}/edit', 'PostsController@edit')->name('edit');
Route::put('posts/{id}', 'PostsController@update')->name('update');

//投稿削除
Route::delete('posts/{id}', 'PostsController@destroy')->name('delete');
