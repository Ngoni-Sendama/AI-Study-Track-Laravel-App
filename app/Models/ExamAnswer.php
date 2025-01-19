<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    protected $fillable=[
        'exam_id',
        'question_id',
        'answer',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    public function question()
    {
        return $this->belongsTo(ExamQuestion::class);
    }
}
