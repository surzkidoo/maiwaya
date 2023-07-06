<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', 'IndexController@index');
Route::get('/get-model/{model}', 'App\Http\Controllers\IndexController@getModel');


Route::get('/product/{id}', 'App\Http\Controllers\IndexController@product');
Route::post('/add-product', 'App\Http\Controllers\IndexController@addProduct');


Route::post('/search-model', 'App\Http\Controllers\IndexController@searchModel');
Route::post('/make-order', 'App\Http\Controllers\IndexController@order');


Route::get('/view-order', 'App\Http\Controllers\IndexController@viewOrder');

