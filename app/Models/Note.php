<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    protected $fillable = ['subject_id', 'note_content'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
