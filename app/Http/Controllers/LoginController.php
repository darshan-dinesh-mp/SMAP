<?php

namespace App\Http\Controllers;

use BladeUIKit\Components\Buttons\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Teacher;

class LoginController extends Controller
{
    public function student_staff_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->isStudent()) {
                // Retrieve student details
                $student = Student::join('users', 'students.student_id', '=', 'users.user_id')
                    ->where('users.email', $credentials['email'])
                    ->select('students.*')
                    ->first();
                session(['user_id'=>$student->student_id, 'role'=>$user->role, 'student_name' => $student->fullname, 'contact'=>$student->contact, 'email'=>$credentials['email'], 'current_semester'=>$student->semester]);
                // Redirect students to the student dashboard
                return redirect()->route('student.dashboard');
            } elseif ($user->isTeacher()) {
                // Retrieve teacher details
                $teacher = Teacher::join('users', 'teachers.emp_id', '=', 'users.user_id')
                    ->where('users.email', $credentials['email'])
                    ->select('teachers.*')
                    ->first();
                session(['user_id'=>$teacher->emp_id, 'role'=>$user->role, 'faculty_name' => $teacher->fullname, 'designation' => $teacher->designation, 'email'=>$credentials['email']]);
                // Redirect teachers to the teacher dashboard
                return redirect()->route('teacher.dashboard');
            } else {
                Auth::logout();
                session()->flush();
                return redirect('/')->with('invalid_student_credential', 'Please visit the admin login page');
            }
        }

        return redirect('/')->with('invalid_student_credential', 'Invalid Credentials');
    }


    public function admin_login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['user_id' => $user->id, 'role' => $user->role]);

            if ($user->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                session()->flush();
                return redirect('admin')->with('invalid_admin_credential', 'Please visit Student Login');
            }
        }
        return redirect('admin')->with('invalid_admin_credential', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}