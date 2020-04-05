<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ShopController@index')->name('shop.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/products', 'ProductController@store')->name('product.store');
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');
Route::put('/products/{product}', 'ProductController@update')->name('product.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.destroy');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('/order', 'OrderController@index')->name('order.index');
Route::post('/order', 'OrderController@create')->name('order.create');
