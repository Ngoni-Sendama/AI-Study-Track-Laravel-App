<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    protected $fillable=[
        'exam_question_id',
        'answer',
    ];

    public function examQuestion()
    {
        return $this->belongsTo(ExamQuestion::class);
    }
}
