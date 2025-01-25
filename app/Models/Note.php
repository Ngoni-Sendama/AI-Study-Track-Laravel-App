<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Smalot\PdfParser\Parser;
use Illuminate\Support\Facades\Log;

class Note extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['subject_id', 'note_content'];

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
      /**
     * Create a new note and log the cleaned text from the PDF.
     *
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function create(array $attributes = [])
    {
        // Get the path of the PDF file from 'note_content'
        $pdfPath = $attributes['note_content'];

        // Initialize the PDF parser
        $parser = new Parser();

        // Parse the PDF to get text content
        $pdf = $parser->parseFile($pdfPath);
        $text = $pdf->getText();

        // Clean up the text: replace newlines with spaces
        $cleanText = str_replace(["\n", "\r"], ' ', $text);

        // Optionally, condense multiple spaces into one
        $cleanText = preg_replace('/\s+/', ' ', $cleanText);

        // Log the cleaned text (you can adjust the log level as needed)
        Log::info('Cleaned PDF Text: ', ['text' => $cleanText]);

        // Call the parent create method to create the note (if you still want to create the note)
        return parent::create($attributes);
    }
}
