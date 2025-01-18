<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['subject_id', 'note_content'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
