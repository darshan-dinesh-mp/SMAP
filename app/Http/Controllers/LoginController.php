<?php

namespace App\Http\Controllers;

use BladeUIKit\Components\Buttons\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function student_staff_login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['user_id' => $user->id, 'role' => $user->role]);

            if ($user->isStudent()) {
                // Redirect students to the student dashboard
                return redirect()->route('student.dashboard');
            } elseif ($user->isTeacher()) {
                // Redirect teachers to the teacher dashboard
                return redirect()->route('teacher.dashboard');
            } else {
                Auth::logout();
                session()->flush();
                return redirect('/')->with('invalid_student_credential', 'Please visit the admin login page');
            }
        }

        // Authentication failed
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