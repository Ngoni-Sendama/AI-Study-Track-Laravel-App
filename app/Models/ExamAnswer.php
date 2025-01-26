<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ExamAnswer extends Model
{
    use LogsActivity;
    
    protected $fillable = [
        'user_id',
        'exam_id',
        'question_id',
        'option_id',
        'is_correct'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly([
            'user_id',
            'exam_id',
            'question_id',
            'option_id',
            'is_correct'
        ]);
    }
    
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
