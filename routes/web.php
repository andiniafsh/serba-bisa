<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout/dashboard-landingPage');
});

//profil akun
Route::get('/pembayaran', function () {
    return view('layout/profil-akun-pembayaran');
});
Route::get('/biodata', function () {
    return view('layout/profil-akun-biodata');
});
Route::get('/alamat', function () {
    return view('layout/profil-akun-daftarAlamat');
});
Route::get('/riwayat', function () {
    return view('layout/profil-akun-riwayatPesanan');
});
Route::get('/riwayat2', function () {
    return view('layout/profil-akun-riwayatPesanan2');
});
Route::get('/pengaturan', function () {
    return view('layout/profil-akun-Pengaturan');
Route::get('/tambah-jasa', function () {
    return view('tambah_jasa');
});