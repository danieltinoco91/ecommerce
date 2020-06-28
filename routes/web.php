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

Route::get('/', 'PagesController@index');
Route::get('/checkout', 'PagesController@checkout');
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@dologin');
Route::get('/logout', 'UsersController@logout');
Route::post('/api/users', 'UsersController@store');
Route::get('/api/users/{id}', 'UsersController@delete');
Route::post('/api/products', 'ProductsController@store');
Route::get('/api/products/{id}', 'ProductsController@delete');
Route::get('/api/products', 'ProductsController@get');
Route::get('/admin', 'ProductsController@index');
Route::get('/admin/products', 'ProductsController@products');
Route::get('/admin/users', 'UsersController@index');
Route::get('/{slug}', 'PagesController@product');
