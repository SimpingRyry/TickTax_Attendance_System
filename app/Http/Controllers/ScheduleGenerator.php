<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Correct import for the facade

class ScheduleGenerator extends Controller
{
    // Method to show the form
    public function showForm()
    {
        return view('memo.form'); // resources/views/form.blade.php
    }

    // Method to generate and stream the PDF
    public function generatePDF(Request $request)
        {

            set_time_limit(120);

        // Get data from form submission
        $data = $request->only(['to_for', 'venue', 'date', 'start_time', 'end_time']);
        $data['logo'] = public_path('images/org_ccms_logo.png'); // Add logo path
        
        // Load view and pass data to PDF
        $pdf = Pdf::loadView('memo.template', $data); // Ensure the correct template path

        // Return the generated PDF with streaming (inline display)
        return $pdf->download('memo.pdf'); 
    }
}
