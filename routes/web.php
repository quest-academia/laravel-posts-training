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

Route::get('login', function () {
    return view('auth.login');
});

// 新規登録画面
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン画面
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'UsersController@index')->name('top');
    Route::get('/', 'PostsController@index')->name('post.top');
    Route::delete('/{id}', 'PostsController@destroy')->name('delete');
    //新規投稿作成画面  
    Route::get('posts/create', 'PostsController@create')->name('create');
    Route::post('posts', 'PostsController@store')->name('store');
});

// 投稿編集画面
Route::get('posts/{id}/edit', 'PostsController@edit')->name('edit');
Route::post('posts/{id}', 'PostsController@update')->name('update');
