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
    return view('index');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('index','PostsController@index')->name('posts.index');
Route::get('/create','PostsController@create')->name('create');
Route::post('/store','PostsController@store')->name('posts.store');
Route::get('/edit/{post_id}','PostsController@edit')->name('posts.edit');
Route::put('/update/{post_id}','PostsController@update')->name('posts.update');
Route::delete('/destroy/{post_id}','PostsController@destroy')->name('posts.destroy');

Route::group(['middleware' => 'auth'], function () {
    Route::get('user/{id}', 'UsersController@show')->name('user.show');
});
