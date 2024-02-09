<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\FeedbackForm;
use App\Models\Sem_1_attendance;
use App\Models\Sem_2_attendance;

class StudentController extends Controller
{
    public function feedback_form()
    {
        // Retrieve student details from session
        $studentName = Session::get('student_name');
        $sem = Session::get('current_semester');
        // $pending_feedback_number = Session::get('pending_feedback_number');
        $subjects = Subject::where('semester_number', $sem)
            ->orderBy('subject_code')
            ->get();

        $formNumber = FeedbackForm::where('student_id', session('user_id'))
            ->where('semester', session('current_semester'))
            ->select('form_number')
            ->get();
        if ($formNumber->isNotEmpty()) {
            $maxFormNumber = $formNumber->max('form_number');
            if ($maxFormNumber == 3) {
                return redirect()->route('student_dashboard')->with('success', 'No performance feedback form pending');
            }
            if ($maxFormNumber == 2) {
                session(['pending_feedback_number' => 3]);
            }
            if ($maxFormNumber == 1) {
                session(['pending_feedback_number' => 2]);
            }
        } else {
            session(['pending_feedback_number' => 1]);
        }

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

    public function submit_feedback_Form(Request $request)
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
        $feedbackForm->form_number = session('pending_feedback_number');
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

        $sem = Session::get('current_semester');
        $subjects = Subject::where('semester_number', $sem)->get();
        if ($sem == 1) {
            dd('sem 1');
            $sem_1_attendance = new Sem_1_attendance();
            $sem_1_attendance->form_number = session('pending_feedback_number');
            $sem_1_attendance->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_1_attendance->$subjectCode = $request->input($subjectCode);
            }
            $sem_1_attendance->save();
        }
        if ($sem == 2) {
            $sem_2_attendance = new Sem_2_attendance();
            $sem_2_attendance->form_number = session('pending_feedback_number');
            $sem_2_attendance->student_id = session('user_id');
            foreach ($subjects as $subject) {
                $subjectCode = $subject->subject_code;
                $sem_2_attendance->$subjectCode = $request->input($subjectCode);
            }
            $sem_2_attendance->save();
        }
        // if ($sem == 3) {
        //     $sem_3_attendance = new Sem_3_attendance();
        //     $sem_3_attendance->form_number = session('pending_feedback_number');
        //     $sem_3_attendance->student_id = session('user_id');
        //     foreach ($subjects as $subject) {
        //         $subjectCode = $subject->subject_code;
        //         $sem_3_attendance->$subjectCode = $request->input($subjectCode);
        //     }
        //     $sem_3_attendance->save();
        // }
        // if ($sem == 4) {
        //     $sem_4_attendance = new Sem_4_attendance();
        //     $sem_4_attendance->form_number = session('pending_feedback_number');
        //     $sem_4_attendance->student_id = session('user_id');
        //     foreach ($subjects as $subject) {
        //         $subjectCode = $subject->subject_code;
        //         $sem_4_attendance->$subjectCode = $request->input($subjectCode);
        //     }
        //     $sem_4_attendance->save();
        // }
        // Redirect back with success message or to another page
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }

    public function  mse_form()
    {
        // Retrieve student details from session
        $studentName = Session::get('student_name');
        $sem = Session::get('current_semester');
        // $pending_feedback_number = Session::get('pending_feedback_number');
        $subjects = Subject::where('semester_number', $sem)
            ->orderBy('subject_code')
            ->get();

        $formNumber = FeedbackForm::where('student_id', session('user_id'))
            ->where('semester', session('current_semester'))
            ->select('form_number')
            ->get();
        if ($formNumber->isNotEmpty()) {
            $maxFormNumber = $formNumber->max('form_number');
            if ($maxFormNumber == 3) {
                return redirect()->route('student_dashboard')->with('success', 'No performance feedback form pending');
            }
            if ($maxFormNumber == 2) {
                session(['pending_feedback_number' => 3]);
            }
            if ($maxFormNumber == 1) {
                session(['pending_feedback_number' => 2]);
            }
        } else {
            session(['pending_feedback_number' => 1]);
        }

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

    public function submit_first_mse_marks(Request $request)
    {
        
        // Redirect back with success message or to another page
        // return redirect()->back()->with('success', 'Feedback submitted successfully!');
        return redirect()->route('');
    }

}
