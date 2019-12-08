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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/categorias', 'CategoryController@index')->name('categorias');
Route::get('/categorias/{id}', 'CategoryController@show');

Route::get('/producto/{id}', 'ProductController@show')->name('producto');

Route::get('/cart', 'CategoryController@index')->name('cart');

Route::get('/contact', 'CategoryController@index')->name('contact');
