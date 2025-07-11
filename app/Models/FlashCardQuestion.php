<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashCardQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'flash_card_id',
        'question',
        'answer'
    ];
}
