<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;
use app\Http\Controllers\DataSiswaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return 'hallo pak';
});


Route::get('/hallo', function(){
    return 'hallo';
});

Route::get('hello', function(){
    return 'hello ';
});

Route::get('hi', function(){
    return 'hi';
});

Route::get('hai', function(){
    return 'hai';
});

Route::get('hai', function(){
    return 'hallo';
});

//parameter wajib
Route::get('/nama-framework/{nama}', function($nama){
    return 'Nama Framework yang dimasukan adalah: ' .$nama;
});

Route::get('/nama-framework/{nama}/{tahun}', function($nama, $tahun){
    return 'Nama Framework yang dimasukan adalah: ' .$nama. '<br> Tahun <b>Rilis</b> ' .$tahun;
});


// optional parameter
Route::get('/nama-saya-adalah/{nama?}', function($nama = null){
    return 'Nama Saya adalah: ' .$nama;
});

Route::get('/nama-saya-adalah/{nama?}', function($nama = 'Wajib Diisi'){
    return 'Nama Saya adalah: ' .$nama;
});

Route::get('/hitung-luas-segitiga/{alas}/{tinggi}', function($alas, $tinggi){
    //$hasil = $alas * $tinggi / 2;
    return 'Hasil luas segitiganya : ' .($alas * $tinggi) / 2;
    //return 'Hasil luas segitiganya : ' .$alas . $tinggi;
});

Route::get('/luas-segitiga/{alas}/{tinggi}', function($alas = 1, $tinggi = 1){
    return 'luas segitiganya : ' .($alas * $tinggi) / 2;
});


// Route Group
Route::group(['prefix' => 'jurusan'], function(){
    Route::get('/', function(){
        return 'berhasil';
    });
    Route::get('/kelas/{namaKelas}', function($namaKelas){
        return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function($nama){
        return $nama;
    });
});

Route::get('data-siswa', [DataSiswaController::class, 'datasiswa']);
Route::get('data-siswi', [DataSiswaController::class, 'datasiswi']);
Route::get('nama/{nama?}', [DataSiswaController::class, 'nama']);

Route::resource('user', UserController::class);