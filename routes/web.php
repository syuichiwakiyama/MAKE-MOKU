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
    return view('homes.index');
});
Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/detail', function(){
    return view ('details.index');
})->name('detail');


Route::get('/profile' , 'HomeController@show')->name('show');


Route::group(['prefix' =>'post' ,'middleware' =>'auth'], function(){
    Route::get ('/index' ,'PostController@index')           ->name('post.index');
    Route::get ('/create' ,'PostController@create')         ->name('post.create');
    Route::post('/store' ,'PostController@store')           ->name('post.store');
    Route::get ('/show/{id}' , 'PostController@show')       ->name('post.show');
    Route::get ('/edit/{id}' , 'PostController@edit')       ->name('post.edit');
    Route::post('/update/{id}' , 'PostController@update')   ->name('post.update');
    Route::post('/destroy/{id}' , 'PostController@destroy') ->name('post.destroy');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
