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
date_default_timezone_set('Asia/Jakarta');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datajurnal','DataController@index')->name('datajurnal');
Route::get('/datajurnal/add','DataController@add')->name('dataadd');
Route::post('/datajurnal/store','DataController@store')->name('datastore');
Route::get('/datajurnal/delete/{id}','DataController@delete')->name('datadelete');

Route::get('/hasil_pengujian','HasilController@index')->name('hasil');
Route::get('/hasil_pengujian/export','HasilController@export')->name('hasilexport');

Route::get('/pengujian/{id}','PengujianController@index')->name('pengujian');
Route::get('/pengujian/proses/{id}','PengujianController@process')->name('proses');
Route::get('/pengujian/exportword','PengujianController@generateDocx');
