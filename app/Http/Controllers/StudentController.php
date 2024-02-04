<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function fetch()
    {
        // Retrieve student details from session
        $studentName = Session::get('student_name');
        $sem = Session::get('current_semester');
        $subjects = Subject::where('semester_number', $sem)->get();

        if ($subjects->isEmpty()) {
            dd($sem);
            return redirect()->route('student_dashboard');
        }
        // Pass student name to the view
        return redirect()->route('student-feedback-form')->with([
            'studentName' => $studentName,
            'semester' => $sem,
            'subjects' => $subjects,
        ]);
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'field1' => 'required',
            'field2' => 'required',
            'field3' => 'required',
            'field4' => 'required',
            'field5' => 'required',
            'field6' => 'required',
            'field7' => 'required',
            'field8' => 'required',
            'field9' => 'required',
            'field10' => 'required',
            'field11' => 'required',
            'field12' => 'required',
            'field13' => 'required',
        ]);

        // Store the form data in the database
        $performanceFeedback = new PerformanceFeedback();
        $performanceFeedback->student_id = session('user_id');
        $performanceFeedback->semester = session('semester');
        $performanceFeedback->field1 = $request->input('field1');
        $performanceFeedback->field2 = $request->input('field2');
        // Assign values for other fields
        $performanceFeedback->save();

        // Redirect back with success message or to another page
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }

}
