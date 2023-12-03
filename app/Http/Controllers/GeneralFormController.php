<?php

namespace App\Http\Controllers;

use App\Models\Semester;
use App\Models\Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GeneralFormController extends Controller
{
    public function insert_form_data(Request $request)
    {
        $semester = Semester::find(1);
        $sub1 = $semester->sub1;
        $sub2 = $semester->sub2;
        $sub3 = $semester->sub3;
        $sub4 = $semester->sub4;
        $sub5 = $semester->sub5;
        $sub6 = $semester->sub6;

        Forms::create([
            'student_id' => Session('user_id'),
            'sem' => '1',
            'field1' => $request->input('field1'),
            'field2' => $request->input('field2'),
            'field3' => $request->input('field3'),
            'field4' => $request->input('field4'),
            'field5' => $request->input('field5'),
            'field6' => $request->input('field6'),
            'sub1_att' => $request->input($sub1),
            'sub2_att' => $request->input($sub2),
            'sub3_att' => $request->input($sub3),
            'sub4_att' => $request->input($sub4),
            'sub5_att' => $request->input($sub5),
            'sub6_att' => $request->input($sub6),
            'field7' => $request->input('field7'),
            'field8' => $request->input('field8'),
            'field9' => $request->input('field9'),
            'field10' => $request->input('field10'),
            'field11' => $request->input('field11'),
            'field12' => $request->input('field12'),
            'field13' => $request->input('field13'),
            'field14' => $request->input('field14')
        ]);

        return redirect('student/dashboard');
    }

    public function fetch()
    {
        if (Session::has('user_id') && Session::get('role') == "student") {
            $semester = Semester::find(1);
            $subjects = $semester->only(['sub1', 'sub2', 'sub3', 'sub4', 'sub5', 'sub6']);
            return view('student.forms.general-form', compact('subjects'));
        } else {
            return redirect('/');
        }
    }
}
