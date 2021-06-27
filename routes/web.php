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

// Route::get('/home', 'HomeController@index')->name('home');

// 重複を避けるためのexcept
Route::resource('posts', 'PostsController', ['except' => ['index']]);

//ログイン認証を通っている場合のみ、内部のルーティングにアクセス可能
Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => 'users'], function(){
        //ユーザー編集フォームを表示
        Route::get('/edit', 'UsersController@edit');
        //フォームに入力した情報を更新
        Route::post('/update','UsersController@update')->name('update');
        //ユーザー更新画面に遷移
        Route::get('/{id}','UsersController@show')->name('details');
    });
});

