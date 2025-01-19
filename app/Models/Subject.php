<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'syllabus',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($subject) {
            // Process syllabus on create or update
            if ($subject->syllabus) {
                $subject->processSyllabus();
            }
        });
        static::deleting(function ($subject) {
            // Delete all topics related to this subject before deleting the subject
            $subject->topics()->delete();
            Storage::delete($subject->getOriginal('syllabus'));
        });
    }

    public function processSyllabus()
    {
        // Use public_path() to get the correct path for public files
        $filePath = public_path('storage/' . $this->syllabus);

        // Check if the file exists
        if (!file_exists($filePath)) {
            throw new \Exception("File not found: " . $filePath);
        }

        // Parse the syllabus file
        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile($filePath);
        $content = $pdf->getText();
        
        // Extract units and topics
        preg_match_all('/Unit (\w+)\s+(.*?)(?=(Unit \w+|$))/s', $content, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            $unit = $match[1];
            $topicsText = $match[2];

            // Save the unit and topics to the database
            $this->topics()->create([
                'unit' => $unit,
                'topics' => explode("\n", trim($topicsText)),
            ]);
        }
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
