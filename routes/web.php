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
Route::get('/dashboard/pembeli/edit/{id}', 'PembeliController@edit');
Route::post('/dashboard/pembeli/update/{id}', 'PembeliController@update');
Route::get('/dashboard/pembeli/delete/{id}', 'PembeliController@destroy');

Route::get('/dashboard/barang', 'BarangController@index');
Route::get('/dashboard/barang/create', 'BarangController@create');
Route::post('/dashboard/barang/store', 'BarangController@store');
Route::get('/dashboard/barang/edit/{id}', 'BarangController@edit');
Route::post('/dashboard/barang/update/{id}', 'BarangController@update');
Route::get('/dashboard/barang/delete/{id}/{foto}', 'BarangController@destroy');

Route::get('/dashboard/penjualan', 'PenjualanController@index');
Route::get('/dashboard/penjualan/create', 'PenjualanController@create');
Route::post('/dashboard/penjualan/store', 'PenjualanController@store');
Route::get('/dashboard/penjualan/delete/{id}', 'PenjualanController@destroy');

Route::get('/dashboard/laporan', 'LaporanController@index');
Route::get('/dashboard/laporan/create', 'LaporanController@create');
Route::post('/dashboard/laporan/store', 'LaporanController@store');
Route::get('/dashboard/laporan/delete/{id}', 'LaporanController@destroy');
