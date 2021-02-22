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


Route::group(['midleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('welcome');
    });
    //ini untuk management sumber pemasukan
    Route::get('sumber-pemasukan','sumber_controller@index');
    Route::get('sumber-pemasukan/add','sumber_controller@add');
    Route::post('sumber-pemasukan/add','sumber_controller@store');
    Route::get('sumber-pemasukan/{id}','sumber_controller@edit');
    Route::put('sumber-pemasukan/{id}','sumber_controller@update');
    Route::delete('sumber-pemasukan/{id}','sumber_controller@delete');

    //manage pemasukan
    Route::get('pemasukan','Pemasukan_controller@index');
    Route::get('pemasukan/yajra','Pemasukan_controller@yajra');
    Route::get('pemasukan/add','Pemasukan_controller@add');
    Route::post('pemasukan/add','Pemasukan_controller@store');
    Route::get('pemasukan/{id}','Pemasukan_controller@edit');
    Route::put('pemasukan/{id}','Pemasukan_controller@update');
    Route::delete('pemasukan/hapus/{id}','Pemasukan_controller@delete');

    //manage pemasukan
    Route::get('pengeluaran','Pengeluaran_controller@index');
    Route::get('pengeluaran/add','Pengeluaran_controller@add');
    Route::post('pengeluaran/add','Pengeluaran_controller@store');
    Route::get('pengeluaran/{id}','Pengeluaran_controller@edit');
    Route::put('pengeluaran/{id}','Pengeluaran_controller@update');
    Route::delete('pengeluaran/hapus/{id}','Pengeluaran_controller@delete');

    //manage pemasukanlaporan
    Route::get('laporan-keuangan','Laporan_controller@index');
    Route::get('cari-laporan','Laporan_controller@cari');

});

// coba coba yuuy
// route blog
Route::get('/blogcoba', 'BlogController@homecoba');
Route::get('/blogcoba/tentangcoba', 'BlogController@tentangcoba');
Route::get('/blogcoba/kontakcoba', 'BlogController@kontakcoba');

Route::get('pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');

Route::get('/anggota', 'AnggotaController@index');
Route::post('/anggota/store', 'AnggotaController@store');
Route::get('/anggota/tambah', 'AnggotaController@tambah');
Route::get('/anggota/edit/{id}', 'AnggotaController@edit');
Route::put('/anggota/update/{id}', 'AnggotaController@update');
Route::get('/anggota/hapus/{id}', 'AnggotaController@delete');
Route::get('/formulir', 'AnggotaController@formulir');
Route::post('formulir/proses', 'AnggotaController@proses');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
//batas suci

Route::get('keluar',function(){
    \Auth::logout();

    return redirect('/login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('welcome');
