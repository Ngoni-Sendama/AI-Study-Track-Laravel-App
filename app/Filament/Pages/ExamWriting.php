<?php

namespace App\Filament\Pages;

use App\Models\Exam;
use Filament\Pages\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Filament\Notifications\Notification;

class ExamWriting extends Page
{

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.exam-writing';
    protected static bool $shouldRegisterNavigation = false;

    public Exam $exam;

    // Add this to handle route parameters
    public static function getRoute(string $path): string
    {
        return parent::getRoute($path . '/{exam}');
    }

    // Mount method to retrieve the Exam by ID
    public function mount(Exam $exam): void
    {
        $this->exam = $exam;
    }

    // Pass the $exam to the view
    protected function getViewData(): array
    {
        return [
            'exam' => $this->exam,
        ];
    }

    public function submitExam(Request $request): void
    {
        $exam = $this->exam;
        $userId = Auth::id();

        $correctAnswers = 0;
        $totalQuestions = 0;

        foreach ($exam->questionSets as $questionSet) {
            foreach ($questionSet->questions as $question) {
                $selectedOptionId = $request->input("question_{$question->id}");

                if ($selectedOptionId) {
                    $totalQuestions++;

                    // Find the selected option
                    $option = $question->options()->find($selectedOptionId);

                    // Check if the selected option is correct
                    $isCorrect = $option && $option->is_correct;

                    // Store the answer in the database
                    ExamAnswer::create([
                        'user_id' => $userId,
                        'exam_id' => $exam->id,
                        'question_id' => $question->id,
                        'option_id' => $selectedOptionId,
                        'is_correct' => $isCorrect,
                    ]);

                    // Count the correct answers
                    if ($isCorrect) {
                        $correctAnswers++;
                    }
                }
            }
        }

        // Calculate the score percentage
        $score = ($totalQuestions > 0) ? ($correctAnswers / $totalQuestions) * 100 : 0;

        // Update the marks in the Exam model
        $exam->marks = $score;
        $exam->save();

        // Notify the user of the result
        Notification::make()
            ->title('Exam Submitted')
            ->success()
            ->body("Your exam was submitted successfully. You scored {$score}%.")
            ->send();

        // Redirect the user back to the exam list
        redirect()->route('filament.dash.resources.exams.index');
    }
}
