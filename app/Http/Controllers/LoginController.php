<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function customLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication succeeded
            $user = Auth::user();
            if ($user->isStudent()) {
                // Redirect students to the student dashboard
                return redirect()->route('student.dashboard');
            } elseif ($user->isTeacher()) {
                // Redirect teachers to the teacher dashboard
                return redirect()->route('teacher.dashboard');
            }
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}