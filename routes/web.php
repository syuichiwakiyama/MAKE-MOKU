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




Route::get('/', 'HomeController@index');
Route::get('/profile' , 'HomeController@show')            ->name('show');
Route::get('/makemoku' , 'HomeController@make')          ->name('homes.make');

Route::group(['prefix' =>'post' ,'middleware' =>'auth'], function(){
  Route::get ('/index' ,'PostController@index')           ->name('post.index');
  Route::get ('/create' ,'PostController@create')         ->name('post.create');
  Route::post('/store' ,'PostController@store')           ->name('post.store');
  Route::get ('/show/{id}' , 'PostController@show')       ->name('post.show');
  Route::get ('/edit/{id}' , 'PostController@edit')       ->name('post.edit');
  Route::post('/update/{id}' , 'PostController@update')   ->name('post.update');
  Route::post('/destroy/{id}' , 'PostController@destroy') ->name('post.destroy');
  Route::get ('/search', 'PostController@search')         ->name('post.search');
});


Route::group(['prefix' =>'comments' ,'middleware' =>'auth'] , function(){
  Route::get('/create' ,'CommentController@create')        ->name('comments.create');
  Route::post('/store' ,'CommentController@store')         ->name('comments.store');
});
Route::get('comments/show/{id}' ,'CommentController@show') ->name('comments.show');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
