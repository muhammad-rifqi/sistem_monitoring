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

Route::get('/dashboard/maps', 'MapsController@index');

Route::get('/dashboard/create', 'MapsController@create');
Route::post('/dashboard/store', 'MapsController@store');

Route::get('/dashboard/delete/{id}', 'MapsController@destroy');