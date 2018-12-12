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

Route::middleware('auth')->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Barang', 'BarangController@indexbarang');
Route::get('/Barang/create', 'BarangController@createbarang');
Route::post('/Barang/save', 'BarangController@savebarang');
Route::get('/Barang/edit/{id}', 'BarangController@editbarang')->name('editBarang');
Route::post('/Barang/update', 'BarangController@updatebarang')->name('update');
Route::get('/Barang/delete/{id}', 'BarangController@deletebarang')->name('deleteBarang');

	
Route::get('/Pinjam', 'PinjamController@indexpinjam');
Route::get('/Pinjam/create/{id}', 'PinjamController@createpinjam');
Route::post('/Pinjam/save', 'PinjamController@savepinjam');
Route::post('Pinjam/update', 'PinjamController@updatepinjam')->name('updatepinjam');


Route::get('Pengembalian','PengembalianController@indexpengembalian');
Route::get('Pengembalian/create/{id}', 'PengembalianController@createpengembalian')->name('kembali');
Route::post('Pengembalian/save', 'PengembalianController@savepengembalian');
Route::get('Pengembalian/edit/{id}', 'PengembalianController@editpengembalian')->name('editpeng');
Route::post('Pengembalian/update', 'PengembalianController@updatepengembalian');
Route::get('Pengembalian/delete/{id}', 'PengembalianController@deletepengembalian')->name('deletepeng');
Route::get('Pengembalian/pdfkembali', 'PengembalianController@pdfkembali')->name('pdfkembali');
Route::get('Pengembalian/pdfall', 'PengembalianController@pdfall')->name('pdfall');
});

Route::get('/Mutasi', 'MutasiController@indexMutasi');
Route::get('/Mutasi/create/{id}', 'MutasiController@createMutasi');
Route::post('/Mutasi/save', 'MutasiController@saveMutasi')->name('saveMutasi');
Route::get('/Mutasi/edit/{id}', 'MutasiController@editMutasi')->name('edit');
Route::post('/Mutasi/update', 'MutasiController@updateMutasi')->name('updatee');
Route::get('/Mutasi/delete/{id}', 'MutasiController@deleteMutasi')->name('delete');