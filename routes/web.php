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

Route::get('/dashboard/home', 'HomeController@index')->name('home');

Route::get('/dashboard/pembeli', 'PembeliController@index');
Route::get('/dashboard/pembeli/create', 'PembeliController@create');
Route::post('/dashboard/pembeli/store', 'PembeliController@store');
Route::get('/dashboard/pembeli/delete/{id}', 'PembeliController@destroy');

Route::get('/dashboard/barang', 'BarangController@index');
Route::get('/dashboard/barang/create', 'BarangController@create');
Route::post('/dashboard/barang/store', 'BarangController@store');
Route::get('/dashboard/barang/delete/{id}', 'BarangController@destroy');