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

Route::get('/siswa', function () {
    return view('create');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/nilai', function () {
    return view('nilai');
});
Route::get('/data', function () {
    return view('data');
});
Route::get('/cetak', function () {
    return view('cetak');
});
Route::get('/siswa','SiswaController@tampil');
Route::get('/data','SiswaController@tampildata');
Route::post('/siswa/tambah','SiswaController@tambah');
Route::get('/siswa/hapus/{id}','SiswaController@hapus');
Route::get('/siswa/edit/{id}','SiswaController@editdata');
Route::get('/search','SiswaController@cari');
Route::patch('/siswa/update','SiswaController@updatedata');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/nilai','nilaiController@tampil');
Route::get('/nilai/{id_siswa}','SiswaController@nilai');
Route::post('/nilai/tambah','nilaiController@tambah');
Route::get('/nilai/edit/{id}','nilaiController@editdata');
Route::get('/nilai/hapus/{id}','nilaiController@hapus');
Route::patch('/nilai/update','nilaiController@updatedata');

Route::get('/cetak','qwController@tampil');
Route::get('/cetak/{id}','qwController@editdata');
Route::get('/cari','qwController@cari');
Route::get('/cariin','nilaiController@cari');

?>