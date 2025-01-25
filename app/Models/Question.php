<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=[
        'question_set_id',
        'question_text',
        'correct_answer'
    ];

    // Relationship: A question belongs to a question set
    public function questionSet()
    {
        return $this->belongsTo(QuestionSet::class);
    }

    // Relationship: A question can have many options
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
