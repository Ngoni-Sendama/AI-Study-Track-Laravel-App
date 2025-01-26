<?php

namespace App\Filament\Pages;

use App\Models\Exam;
use App\Models\ExamAnswer as Answer;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class ExamAnswer extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.exam-answer';
    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $title = 'Exam Results';
    public Exam $exam; // Declare the exam model

    public function mount(int $examId) // Accept the examId as a parameter
    {
        $this->exam = Exam::findOrFail($examId); // Find the exam by ID
    }

    public function getUserAnswers()
    {
        $userId = Auth::id(); // Get the logged-in user ID
        $userAnswers = Answer::where('exam_id', $this->exam->id)
            ->where('user_id', $userId) // Get the answers for the current user
            ->get();

        return $userAnswers;
    }
}
