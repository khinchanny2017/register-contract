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



// frontend
Route::get('/backend/index','frontend\RegisterController@index')->name('index');
Route::get('/frontend/create','frontend\RegisterController@create')->name('create');
Route::post('/frontend/store','frontend\RegisterController@store')->name('store');

Route::get('backend/show', 'backend\RegisterController@show')->name('show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

