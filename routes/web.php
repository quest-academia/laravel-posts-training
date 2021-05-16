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

Route::middleware('auth')->group(function () {
    Route::get('/', 'PostsController@index');
    Route::get('posts/new', 'PostsController@create')->name('posts.create');
    Route::post('posts', 'PostsController@store')->name('posts.store');
    Route::get('post/{id}/edit', 'PostsController@edit')->name('post.edit')->middleware('editcheck');
    Route::post('post/{id}', 'PostsController@update')->name('post.update');

});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::prefix('users')->group(function () {
    Route::get('/{user}', 'UsersController@show')->name('users.show');
    Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
    Route::put('/{user}', 'UsersController@update')->name('users.update');
});
