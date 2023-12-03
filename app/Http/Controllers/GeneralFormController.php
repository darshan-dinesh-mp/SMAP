<?php

namespace App\Http\Controllers;
use App\Models\Semester;
use Illuminate\Http\Request;

class GeneralFormController extends Controller
{
    public function form_insert(Request $request){
        //inserts into form table here
    }

    public function fetch(){
        $semester = Semester::find(1);
        $subjects = $semester->only(['sub1', 'sub2', 'sub3', 'sub4', 'sub5', 'sub6']);
        return view('student.forms.general-form', compact('subjects'));
    }
}
