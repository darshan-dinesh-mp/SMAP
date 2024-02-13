<?php

namespace App\Http\Controllers;

use App\Models\Mentorship;
use App\Models\Student;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;

class FacultyController extends Controller
{
    public function addStudent(Request $request)
    {
        $request->validate([
            'usn' => 'required',
            'fullname' => 'required',
            'semester' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        try {
            $user = new User;
            $user->user_id = $request->usn;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'student';
            $user->save();
            
            $student = new Student;
            $student->student_id = $request->usn;
            $student->fullname = $request->fullname;
            $student->semester = $request->semester;
            $student->contact = $request->contact;
            $student->email = $request->email;
            $student->save();
            
            $mentorship = new Mentorship;
            $mentorship->mentor_id = session('user_id');
            $mentorship->mentee_id = $request->usn;
            $mentorship->save();
            dd(session('user_id'),' ',$request->usn);
            return redirect()->route('teacher.dashboard')->with('success', 'Student added successfully.');

        } catch (QueryException $exception) {   
            $errorCode = $exception->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect()->route('teacher.dashboard')->with('error', 'Student USN already exists.');
            }
            return redirect()->route('teacher.dashboard')->with('error', 'Database error occurred.');
        } catch (Exception $exception) {
            return redirect()->route('teacher.dashboard')->with('error', $exception->getMessage());
        }
    }
}
