<?php

namespace App\Models;

use GeminiAPI\Client;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Log;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Exam extends Model
{
    use LogsActivity;

    protected $fillable = [
        'user_id',
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
            'marks' => 'float',
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'subject_id',
                'topics',
                'notes',
                'date',
                'marks',
            ]);
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
