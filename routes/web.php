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

Route::get('/daftar-mitra-1', function () {
    return view('daftar_mitra_1');
});

Route::get('/daftar-mitra-2', function () {
    return view('daftar_mitra_2');
});

Route::get('/daftar-mitra-3', function () {
    return view('daftar_mitra_3');
});

route::get('/daftar', function () {
    return view('daftar');
});

route::get('/test', function () {
    return view('test');

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
});
Route::get('/tambah-jasa', function () {
    return view('tambah_jasa');
});

Route::get('/shoppingpage', function () {
    return view('shoppingpage/shopping-page-landing');
});
Route::get('/shoppingpage-tukangbangunan', function () {
    return view('shoppingpage/shopping-page-tukangbangunan');
});
Route::get('/shoppingpage-tukangkebun', function () {
    return view('shoppingpage/shopping-page-tukangkebun');
});
Route::get('/shoppingpage-servicekendaraan', function () {
    return view('shoppingpage/shopping-page-servicekendaraan');
});
Route::get('/shoppingpage-cleaningservice', function () {
    return view('shoppingpage/shopping-page-cleaningservice');
});
Route::get('/shoppingpage-serviceac', function () {
    return view('shoppingpage/shopping-page-serviceac');
});
Route::get('/shoppingpage-belajaringgris', function () {
    return view('shoppingpage/shopping-page-belajaringgris');
});
Route::get('/shoppingpage-pasangregulatorgas', function () {
    return view('shoppingpage/shopping-page-pasangregulatorgas');
});
Route::get('/shoppingpage-keranjang', function () {
    return view('shoppingpage/shopping-page-keranjang');
});
Route::get('/shoppingpage-pembayaran', function () {
    return view('shoppingpage/shopping-page-pembayaran');
});
Route::get('/shoppingpage-metodepembayaran', function () {
    return view('shoppingpage/shopping-page-metodepembayaran');
});
Route::get('/shoppingpage-pembayaranberhasil', function () {
    return view('shoppingpage/shopping-page-pembayaranberhasil');
});