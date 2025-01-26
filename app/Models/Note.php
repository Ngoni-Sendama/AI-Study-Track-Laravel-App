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
     * Boot method to handle model events.
     */
    protected static function boot()
    {
        parent::boot();

        // Listen for the creating event
        static::creating(function ($note) {
            // Resolve the full PDF file path
            $pdfPath = storage_path('app/public/' . $note->note_content);

            if (file_exists($pdfPath)) {
                try {
                    // Parse the PDF
                    $parser = new Parser();
                    $pdf = $parser->parseFile($pdfPath);
                    $text = $pdf->getText();

                    // Clean the extracted text
                    $cleanText = str_replace(["\n", "\r"], ' ', $text);
                    $cleanText = preg_replace('/\s+/', ' ', $cleanText);

                    // Log the cleaned text
                    Log::info('Cleaned PDF Text: ', ['text' => $cleanText]);
                } catch (\Exception $e) {
                    // Log any errors during parsing
                    Log::error('Failed to parse PDF: ' . $e->getMessage());
                }
            } else {
                // Log an error if the file does not exist
                Log::error('PDF file not found: ' . $pdfPath);
            }
        });
    }
}
