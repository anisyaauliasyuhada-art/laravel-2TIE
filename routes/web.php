
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

// Halaman utama langsung menuju Question
Route::get('/', function () {
    return redirect()->route('question.index');
});

// Menampilkan halaman Question
Route::get('/question', [QuestionController::class, 'index'])
    ->name('question.index');

// Menyimpan pertanyaan dari form
Route::post('/question', [QuestionController::class, 'store'])
    ->name('question.store');
