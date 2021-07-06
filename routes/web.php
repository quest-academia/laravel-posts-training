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

// Authのルーティング
Auth::routes();

//ログイン認証を通っている場合のみ、内部のルーティングにアクセス可能
Route::group(['middleware' => 'auth'], function () {
    // 投稿一覧ページへ
    Route::get('/', 'PostsController@index');
    // 重複を避けるためのexcept
    Route::resource('posts', 'PostsController', ['except' => ['index', 'destroy']]);
    Route::delete('posts/{id}', 'PostsController@destory')->name('posts.destroy');

    Route::post('/posts/comments', 'CommentsController@store')->name('comments.store');
});
