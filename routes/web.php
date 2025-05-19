<?php

use App\Filament\Pages\ExamAnswer;
use App\Filament\Pages\ExamWriting;
use Illuminate\Support\Facades\Route;

// Route::get('subjects', function () {
//     return view('welcome');
// })->name('home');

Route::post('/chat/clear', function () {
    session()->forget('chat');
    return redirect()->route('chat');
})->name('chat.clear');





// Filament View
Route::get('/exam-writing/{exam}', ExamWriting::class)->name('exam-writing');
Route::get('/exam-answers/{examId}', ExamAnswer::class)->name('exam-answers');

Route::post('/exam-writing/{exam}/submit', [ExamWriting::class, 'submitExam'])->name('filament.pages.exam-writing.submit');


