<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class PDFController extends Controller
{
    public function convertPdfToText(Request $request)
    {
        // Validate the uploaded file (if needed)
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10000',  // Adjust max size as necessary
        ]);

        // Retrieve the uploaded PDF file
        $pdfFile = $request->file('pdf');

        // Initialize the PDF parser
        $parser = new Parser();

        // Parse the PDF to get text content
        $pdf = $parser->parseFile($pdfFile->getPathname());
        $text = $pdf->getText();

        // Clean up the text: replace newline characters with spaces
        $cleanText = str_replace(["\n", "\r"], ' ', $text);

        // Optionally, you can also condense multiple spaces into one
        $cleanText = preg_replace('/\s+/', ' ', $cleanText);

        // Output the cleaned-up text (similar to how it would appear in a PDF viewer)
        return response()->json([
            'clean_text' => $cleanText
        ]);
    }
}
