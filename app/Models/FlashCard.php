<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlashCard extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'user_id',
        'subject_id',
        'name',
        'topics'
    ];

     protected function casts(): array
    {
        return [
            'topics' => 'array',
        ];
    }
}
