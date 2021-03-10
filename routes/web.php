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

Route::get('/', 'PostsController@index')->name('top');
Route::get('/show/{posts_id}', 'PostsController@show')->name('posts.show');
Route::get('/create', 'PostsController@create')->name('posts.create');
Route::get('/edit/{posts_id}', 'PostsController@edit')->name('posts.edit');