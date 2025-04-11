<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ImportController extends Controller
{



    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'importFile' => 'required|mimes:csv,txt',
        ]);

        // Get the uploaded file
        $file = $request->file('importFile');
        $path = $file->getRealPath();

        // Read the CSV file, starting from the 8th line
        $rows = array_map('str_getcsv', file($path));
        $rows = array_slice($rows, 7); // Skip first 7 lines (index 0-based)

        // Insert each row from the CSV into the database
        foreach ($rows as $row) {
            $birthDate = \Carbon\Carbon::createFromFormat('m/d/Y', $row[9])->format('Y-m-d');

            Student::create([
                'no' => $row[0] ?? null,
                'id_number' => $row[1] ?? null,
                'name' => $row[2] ?? null,

                'gender' => $row[3] ?? null,
                'course' => $row[4] ?? null,
                'year' => $row[5] ?? null,
                'units' => $row[6] ?? null,

                'section' => $row[7] ?? null,
                'contact_no' => $row[8] ?? null,
               'birth_date' => $birthDate,
                'address' => $row[10] ?? null,



            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Data imported successfully!');
    }

    public function show()
    {
        $students = Student::all();  // Get all students from the database
        return view('registration',compact('students'));  // Pass the students to the view
    }
}
