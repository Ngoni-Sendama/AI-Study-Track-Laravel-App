<?php

use App\Filament\Pages\ExamAnswer;
use App\Filament\Pages\ExamWriting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\OpenController;

// Route::get('subjects', function () {
//     return view('welcome');
// })->name('home');

Route::get('/openai', [OpenController::class, 'showForm'])->name('openai.form');
Route::get('/villa', [OpenController::class, 'subjects'])->name('subjects');

Route::post('convert-pdf', [PDFController::class, 'convertPdfToText']);

// Filament View
Route::get('/exam-writing/{exam}', ExamWriting::class)->name('exam-writing');
Route::get('/exam-answers/{examId}', ExamAnswer::class)->name('exam-answers');

Route::post('/exam-writing/{exam}/submit', [ExamWriting::class, 'submitExam'])->name('filament.pages.exam-writing.submit');
