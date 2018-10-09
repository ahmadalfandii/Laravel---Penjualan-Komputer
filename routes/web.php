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



// ini halaman pegawai
Route::get('pegawai', 'PegawaiController@index');
Route::get('pegawai/tambah', 'PegawaiController@tambah');
Route::post('pegawai/simpan', 'PegawaiController@simpan');
Route::get('pegawai/hapus/{id}', 'PegawaiController@hapus');
// ini halaman ubah data pegawai
Route::get('pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('pegawai/update/{id}', 'PegawaiController@update');

// ini halaman manager
Route::get('manager', 'ManagerController@index');
Route::get('manager/tambah', 'ManagerController@tambah');
Route::post('manager/simpan', 'ManagerController@simpan');
Route::get('manager/hapus/{id}', 'ManagerController@hapus');
// ini halaman ubah data pegawai
Route::get('manager/edit/{id}', 'ManagerController@edit');
Route::put('manager/update/{id}', 'ManagerController@update');

// ini halaman supplier
Route::get('supplier', 'SupplierController@index');
Route::get('supplier/tambah', 'SupplierController@tambah');
Route::post('supplier/simpan', 'SupplierController@simpan');
Route::get('supplier/hapus/{id}', 'SupplierController@hapus');
// ini halaman ubah data pegawai
Route::get('supplier/edit/{id}', 'SupplierController@edit');
Route::put('supplier/update/{id}', 'SupplierController@update');

// ini halaman barang
Route::get('barang','BarangController@index');
Route::get('barang/tambah','BarangController@tambah');
Route::post('barang/simpan','BarangController@simpan');
Route::get('barang/edit/{id}','BarangController@edit');
Route::put('barang/update/{id}','BarangController@update');
Route::get('barang/hapus/{id}', 'BarangController@hapus');
Route::get('barang/cari','BarangController@cari');

Route::get('transaksi','TransaksiController@index');
Route::get('transaksi/tambah','TransaksiController@tambah');
Route::post('transaksi/simpan','TransaksiController@simpan');
Route::get('transaksi/hapus/{id}', 'TransaksiController@hapus');
Route::get('transaksi/return/{id}', 'TransaksiController@return');

// halaman laporan
Route::get('laporan/barang','LaporanController@barang');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
