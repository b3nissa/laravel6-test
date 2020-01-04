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


Route::get('/contact', function () {
    return view('contact');
});



Route::get('article/overzicht', 'ArticlesController@index');
Route::post('article', 'ArticlesController@store');
Route::get('article/create', 'ArticlesController@create');
Route::get('article/{article}', 'ArticlesController@show')->name('article.show');
Route::get('article/{article}/edit', 'ArticlesController@edit');
Route::put('article/{article}', 'ArticlesController@update');



Route::get('/posts/{post}', 'PostsController@show');
