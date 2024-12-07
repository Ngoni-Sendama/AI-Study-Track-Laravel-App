<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable=[
        'subject_id',
        'topics',
        'content',
        'date'
    ];
}
