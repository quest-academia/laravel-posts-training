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

Route::get('/', 'PostsController@index');

Route::get('create','PostsController@create')->name('create');
Route::get('edit','PostsController@edit')->name('posts.edit');

Route::put('/update','PostsController@update')->name('posts.update');
Route::delete('/destroy/{post_id}','PostsController@destroy')->name('posts.destroy');

Route::group(['middleware'=>'auth'],function(){
    Route::resource('posts','PostsController',['only'=>['create','store','destroy']]);
});