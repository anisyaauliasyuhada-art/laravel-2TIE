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

// Pelanggan Routes (Termasuk create.blade.php)
Route::get('/pelanggan', [PelangganController::class, 'index'])
    ->name('pelanggan.index');

Route::get('/pelanggan/create', [PelangganController::class, 'create'])
    ->name('pelanggan.create');

Route::post('/pelanggan', [PelangganController::class, 'store'])
    ->name('pelanggan.store');

    Route::get('/pelanggan/index', [PelangganController::class, 'index']);
