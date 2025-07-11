<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'question_id',
        'option_text',
        'is_correct'
    ];

    // Relationship: An option belongs to a question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
