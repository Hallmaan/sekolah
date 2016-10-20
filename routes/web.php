<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('welcome','TambahController@tambah');
Route::get('tampil_edit/{id}','TambahController@tampil_edit');
Route::post('edit','TambahController@edit');
