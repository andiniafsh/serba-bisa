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
    return view('dashboard-landingPage');
});

Route::get('/daftar-mitra-1', function () {
    return view('daftar_mitra_1');
});

route::get('/daftar', function () {
    return view('daftar');
});

route::get('/test', function () {
    return view('test');
});