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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PegawaiController@index');

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/mahasiswa', 'mahasiswaController@index');

Route::get('/datapegawai', 'PegawaiController@index');

Route::get('/datapegawai/tambah', 'PegawaiController@add')->name('tambahpegawai');
Route::post('/datapegawai/tambah', 'PegawaiController@prosesAdd');

Route::get('/datapegawai/update', 'PegawaiController@update');

Route::get('/datapegawai/hapus', 'PegawaiController@delete');