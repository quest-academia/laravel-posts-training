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

Route::get('/', function () {
    return view('welcome');
});

// 新規登録画面
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン画面
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');

//投稿一覧画面
Route::group(['middleware' => 'auth'], function()
    {
    Route::get('/', 'PostsController@index')->name('top');
    Route::delete('/{id}', 'PostsController@destroy')->name('delete');
    });

//コメント表示
//Route::post('/store', 'CommentsController@store')->name('comment.store');
Route::post('/comments', 'CommentsController@store')->name('comment.store');
//Route::get('/comments{id}', 'CommentsController@index')->name('comment.index');
