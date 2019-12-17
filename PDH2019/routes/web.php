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

Route::get('/carrito', 'CartController@index')->middleware('auth');

Route::get('/contacto', 'ContactController@index')->name('contacto');

Route::get('/buscador', 'ProductController@search')->name('buscador');

Route::post('/addtocart', 'CartController@store')->middleware('auth');

Route::post('/deletecart', 'CartController@destroy')->middleware('auth');







Route::get('/admin', 'AdminController@index')->middleware('auth', 'admin');
Route::post('/borrarproducto', 'AdminController@destroy')->middleware('auth', 'admin');
