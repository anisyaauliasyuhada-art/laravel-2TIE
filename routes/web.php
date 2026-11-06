<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

// Halaman Utama (Langsung ke Dashboard)
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Halaman Home
Route::get('/home', [HomeController::class, 'index']);

// Question Route
Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// Dashboard Route
Route::get('dashboard', [DashboardController::class, 'index']);

// Menampilkan daftar pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index'])
    ->name('pelanggan.index');

// Menampilkan form tambah pelanggan
Route::get('/pelanggan/create', [PelangganController::class, 'create'])
    ->name('pelanggan.create');

// Menyimpan pelanggan bar                   u
Route::post('/pelanggan', [PelangganController::class, 'store'])
    ->name('pelanggan.store');

// Menampilkan form edit pelanggan
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit'])
    ->name('pelanggan.edit');

// Memperbarui data pelanggan
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])
    ->name('pelanggan.update');

// Menghapus data pelanggan
Route::delete('/pelanggan/{id}', [PelangganController::class, 'destroy'])
    ->name('pelanggan.destroy');