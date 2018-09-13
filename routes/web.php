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
    return view('frontend.homepage.index');
});



// frontend
Route::get('/register/index','Frontend\RegisterController@index')->name('index');
Route::get('/register/create','Frontend\RegisterController@createRegister')->name('createRegister');
Route::post('/register/store','Frontend\RegisterController@createRegister')->name('createRegister');

Route::get('backend/show', 'backend\RegisterController@show')->name('show');  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// test products
Route::get('products/create', 'Frontend\RegisterController@createProduct')->name('createProduct');
Route::post('products/store', 'Frontend\RegisterController@storeProduct')->name('storeproduct');


// 
Route::resource('student', 'Frontend\StudentRegister');