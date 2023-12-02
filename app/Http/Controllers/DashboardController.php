<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function student()
    {
        return view('student.dashboard'); // Assuming you have a view named student.dashboard
    }

    public function teacher()
    {
        return view('teacher.dashboard'); // Assuming you have a view named teacher.dashboard
    }
}
