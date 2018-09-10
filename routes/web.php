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


Route::get('/index','RegisterController@index')->name('index');
Route::get('/create','RegisterController@create')->name('create');
Route::post('/store','RegisterController@store')->name('store');

Route::get('show', 'RegisterController@show')->name('show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
