<?php

use App\Filament\Pages\ExamAnswer;
use App\Filament\Pages\ExamWriting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\OpenController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/openai', [OpenController::class, 'showForm'])->name('openai.form');

Route::get('/exams/{exam}', [ExamController::class, 'generateExamQuestions']);
Route::get('/exams-writing/{exam}', [ExamController::class, 'showExam']);
Route::post('/submit-exam/{exam}', [ExamController::class, 'submitExam'])->name('submit.exam');
Route::get('done',[ExamController::class, 'index'])->name('exams.index');

Route::post('convert-pdf', [PDFController::class, 'convertPdfToText']);

// Filament View
Route::get('/exam-writing/{exam}', ExamWriting::class)->name('exam-writing');
Route::get('/exam-answers/{examId}', ExamAnswer::class)->name('exam-answers');