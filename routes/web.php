
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Halaman utama langsung menuju Question
Route::get('/question', [QuestionController::class, 'index'])
    ->name('question.index');

// Menampilkan halaman Question
Route::get('/question', [QuestionController::class, 'index'])
    ->name('question.index');

// Menyimpan pertanyaan dari form
Route::post('/question', [QuestionController::class, 'store'])
    ->name('question.store');


