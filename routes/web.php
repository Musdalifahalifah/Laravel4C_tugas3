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

Route::get('makul','MakulController@index')->name('makul');

Route::get('makul-create','MakulController@create')->name('tambah.makul');

Route::POST('makul-store','MakulController@store')->name('simpan.makul');

Route::get('makul-edit/{id}','MakulController@edit')->name('edit.makul');

Route::POST('makul-update/{id}','MakulController@update')->name('update.makul');

Route::get('makul-hapus/{id}','MakulController@destroy')->name('hapus.makul');