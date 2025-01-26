<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    protected $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'option_id',
        'is_correct'
    ];

    // Define the relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    // Define the relationship with Option
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
     
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
