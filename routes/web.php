<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('simple-home');
});

Route::get('/home', [HomeController::class,'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/home/signup', [HomeController::class, 'signup']);
Route::post('/home/signup', [HomeController::class, 'signup']);

Route::get('/auth', [AuthController::class, 'index'])->name('login.form');
Route::post('/auth/login', [AuthController::class, 'login']);
// Route::get('/pcr', function () {
//     return 'Selamat Datang di Website Kampus PCR!';
// });

// Route::get('/mahasiswa', function () {
//     return 'Halo Mahasiswa';
// });

// Route::get('/nama/{param1}', function ($param1) {
//     return 'Nama saya: '.$param1;
// });

// Route::get('/nim/{param1?}', function ($param1 = '') {
//     return 'NIM saya: '.$param1;
// });

// Route::get('/mahasiswa', function () {
//     return 'Halo Mahasiswa';
// })->name('mahasiswa.show');

// Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Route::get('/about', function () {
//     return view('halaman-about');
// });

