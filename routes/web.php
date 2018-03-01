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

Auth::routes();


Route::get('/home', 'CategoryController@index')->name('home');
Route::get('/create', 'CategoryController@create');
Route::post('/create', 'CategoryController@store');

Route::get('/category/{code}', 'CategoryController@show');



Route::get('/createarticle', 'ArticleController@create');
Route::post('/createarticle', 'ArticleController@store');