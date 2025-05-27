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


Route::get('/dashboard/daerah', 'DaerahController@index');
Route::get('/dashboard/daerah/create', 'DaerahController@create');
Route::get('/dashboard/daerah/edit/{id}', 'DaerahController@edit');
Route::get('/dashboard/daerah/delete/{id}', 'DaerahController@destroy');
Route::post('/dashboard/daerah/store', 'DaerahController@store');
Route::post('/dashboard/daerah/update/{id}', 'DaerahController@update');

Route::get('/dashboard/dekopinda', 'DekopindaController@index');
Route::get('/dashboard/dekopinda/create', 'DekopindaController@create');
Route::get('/dashboard/dekopinda/edit/{id}', 'DekopindaController@edit');
Route::get('/dashboard/dekopinda/delete/{id}', 'DekopindaController@destroy');
Route::post('/dashboard/dekopinda/store', 'DekopindaController@store');
Route::post('/dashboard/dekopinda/update/{id}', 'DekopindaController@update');
Route::post('/dashboard/dekopinda/excel', 'DekopindaController@import_excel');



Route::get('/dashboard/dekopinwil', 'DekopinwilController@index');
Route::get('/dashboard/dekopinwil/create', 'DekopinwilController@create');
Route::get('/dashboard/dekopinwil/edit/{id}', 'DekopinwilController@edit');
Route::get('/dashboard/dekopinwil/delete/{id}', 'DekopinwilController@destroy');
Route::post('/dashboard/dekopinwil/store', 'DekopinwilController@store');
Route::post('/dashboard/dekopinwil/update/{id}', 'DekopinwilController@update');
Route::post('/dashboard/dekopinwil/import_excel', 'DekopinwilController@import_excel');

Route::get('/dashboard/induk_koperasi', 'IndukKoperasiController@index');
Route::get('/dashboard/perangkat', 'PerangkatController@index');


// view post data
Route::post('/dashboard/view', 'HomeController@store');
Route::get('/dashboard/show/{id}/{slug}', 'HomeController@show');
Route::post('/dashboard/save', 'HomeController@savelist');


Route::get('/dashboard/list', 'ListKoperasiController@index');