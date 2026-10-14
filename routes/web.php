<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Halaman Utama → home.blade.php
Route::get('/', function () {
    return view('home');
});

// Halaman Home
Route::get('/', [HomeController::class, 'index']);

// Halaman PCR
Route::get('/pcr', function () {
    return 'Selamat datang di website Kampus PCR';
});

// Route Mahasiswa
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

// Route Nama
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

// Route Mahasiswa dengan parameter
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Route NIM
Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: ' . $param1;
});

// Halaman About
Route::get('/about', function () {
    return view('halaman-about');
});