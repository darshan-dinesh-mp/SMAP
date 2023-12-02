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
                return redirect('/');
            }
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function admin_login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['user_id' => $user->id, 'role' => $user->role]);

            if ($user->isAdmin()) {
                // Redirect admin to the admin dashboard
                return redirect()->route('admin.dashboard');
            } else {
                Auth::logout();
                session()->flush();
                return redirect('admin');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }
}