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
        'date',
        'marks',
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

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    // Updates
    public function questionSets()
    {
        return $this->hasMany(QuestionSet::class);
    }
    public function answers()
    {
        return $this->hasMany(ExamAnswer::class);
    }
}
