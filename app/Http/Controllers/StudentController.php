<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\FeedbackForm;

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
        $feedbackForm = new FeedbackForm();
        $feedbackForm->form_number = session('pending_form_number');
        $feedbackForm->student_id = session('user_id');
        $feedbackForm->semester = session('current_semester');
        $feedbackForm->field1 = $request->input('field1');
        $feedbackForm->field2 = $request->input('field2');
        $feedbackForm->field3 = $request->input('field3');
        $feedbackForm->field4 = $request->input('field4');
        $feedbackForm->field5 = $request->input('field5');
        $feedbackForm->field6 = $request->input('field6');
        $feedbackForm->field7 = $request->input('field7');
        $feedbackForm->field8 = $request->input('field8');
        $feedbackForm->field9 = $request->input('field9');
        $feedbackForm->field10 = $request->input('field10');
        $feedbackForm->field11 = $request->input('field11');
        $feedbackForm->field12 = $request->input('field12');
        $feedbackForm->field13 = $request->input('field13');
        $feedbackForm->save();

        // Redirect back with success message or to another page
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }

}
