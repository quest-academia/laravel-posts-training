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

// Authのルーティング
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

//ログイン認証を通っている場合のみ、内部のルーティングにアクセス可能
Route::group(['middleware' => 'auth'], function () {
    // 重複を避けるためのexcept
    Route::resource('posts', 'PostsController', ['except' => ['index', 'destroy']]);
    Route::get('postsdelete/{id}', 'PostsController@destroy')->name('posts.destroy');

    Route::group(['prefix' => 'users'], function(){
       
        // ユーザー更新画面に遷移
        Route::get('/{id}','UsersController@show')->name('show');
        // ユーザー編集フォームを表示
        Route::get('/{id}/edit', 'UsersController@edit');
        // フォームに入力した情報で更新
        Route::put('/{id}','UsersController@update')->name('update');
    });
});