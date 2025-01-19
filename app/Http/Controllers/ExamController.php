<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Topic;
use App\Models\Subject;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('topics')->get();
        return view('study.select', compact('subjects'));
    }

    public function getTopicsAndNotesBySubject(Request $request)
    {
        $subjectId = $request->input('subject_id');
        $topics = Topic::where('subject_id', $subjectId)->get();
        $notes = Note::where('subject_id', $subjectId)->get();

        return response()->json([
            'topics' => $topics,
            'notes' => $notes,
        ]);
    }
}
