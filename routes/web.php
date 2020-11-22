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





// Route::group(['prefix' =>'post' ,'middleware' =>'auth'], function(){
//     Route::get ('/index' ,'PostController@index')           ->name('post.index');
//     Route::get ('/create' ,'PostController@create')         ->name('post.create');
//     Route::post('/store' ,'PostController@store')           ->name('post.store');
//     Route::get ('/show/{id}' , 'PostController@show')       ->name('post.show');
//     Route::get ('/edit/{id}' , 'PostController@edit')       ->name('post.edit');
//     Route::post('/update/{id}' , 'PostController@update')   ->name('post.update');
//     Route::post('/destroy/{id}' , 'PostController@destroy') ->name('post.destroy');
// });


Route::get ('post/index' ,'PostController@index')           ->name('post.index');
Route::get ('post/create' ,'PostController@create')         ->name('post.create');
Route::post('post/store' ,'PostController@store')           ->name('post.store');
Route::get ('post/show/{id}' , 'PostController@show')       ->name('post.show');
Route::get ('post/edit/{id}' , 'PostController@edit')       ->name('post.edit');
Route::post('post/update/{id}' , 'PostController@update')   ->name('post.update');
Route::post('post/destroy/{id}' , 'PostController@destroy') ->name('post.destroy');



Route::get('/', 'HomeController@index');
Route::get('/detail/{id}' ,'PostController@detail')->name('post.detail');
Route::get('/profile' , 'HomeController@show')->name('show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
