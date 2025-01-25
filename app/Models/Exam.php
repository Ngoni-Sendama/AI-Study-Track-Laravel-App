<?php

namespace App\Models;

use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Exam extends Model
{
    protected $fillable = [
        'subject_id',
        'topics',
        'notes',
        'date'
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'topics' => 'array',
            'notes' => 'array',
        ];
    }

    // public function answer()
    // {
    //     return $this->belongsTo(ExamAnswer::class);
    // }
    // public function questions()
    // {
    //     return $this->hasMany(ExamQuestion::class);
    // }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    // Updates
    public function questionSets()
    {
        return $this->hasMany(QuestionSet::class);
    }
}
