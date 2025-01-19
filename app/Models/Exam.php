<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable=[
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

    public function answer()
    {
        return $this->belongsTo(ExamAnswer::class);
    }
    public function question()
    {
        return $this->hasMany(ExamQuestion::class);
    }
}
