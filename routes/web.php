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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
        // kategori Transaksi
Route::get('/kategoriuangmasuk', function () {
    return view('kategori.uangmasuk');
});
Route::get('/kategoriuangkeluar', function () {
    return view('kategori.uangkeluar');
});
        // Transaksi Route
 Route::get('/transaksiuangkeluar', function () {
     return view('transaksi.uangkeluar');
 });
 Route::get('/transaksiuangmasuk', function () {
    return view('transaksi.uangmasuk');
});

// Kategori Routes
Route::resource('categories', CategoriesController::class);

// Transaksi Routes
Route::resource('transactions', TransactionsController::class);