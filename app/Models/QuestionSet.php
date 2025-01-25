<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionSet extends Model
{
    protected $fillable=[
    'exam_id'];
     // Relationship: A question set belongs to an exam
     public function exam()
     {
         return $this->belongsTo(Exam::class);
     }
 
     // Relationship: A question set can have many questions
     public function questions()
     {
         return $this->hasMany(Question::class);
     }
}
