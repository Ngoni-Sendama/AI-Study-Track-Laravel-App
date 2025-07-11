<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingExam extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'subject_id',
        'topics',
        'notes', // from User
        'date', // from User
        'marks', // from AI
        'question', // from AI
        'answer', // from user
        'analysis', // from AI
    ];
}
