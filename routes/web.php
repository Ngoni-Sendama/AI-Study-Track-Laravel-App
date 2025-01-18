<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeminiController;
use App\Http\Controllers\OpenController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('test', function () {
    return view('test');
})->name('test');

Route::get('/gemini', [GeminiController::class, 'showForm'])->name('gemini.form');
Route::post('/generate-text', [GeminiController::class, 'generateText'])->name('generate-text');

Route::post('/question', [GeminiController::class, 'index']);

Route::get('/openai', [OpenController::class, 'showForm'])->name('openai.form');
Route::post('/generate-text-openai', [OpenController::class, 'generateText'])->name('generate-text-openai');

