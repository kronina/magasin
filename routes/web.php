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

Route::get('/', function () {
    return view('index');
})->name('Pindex');
Route::get('/products', function () {
    return view('products');
})->name('Pproducts');
Route::get('/store', function () {
    return view('store');
})->name('Pstore');
Route::get('/about', function () {
    return view('about');
})->name('Pabout');
