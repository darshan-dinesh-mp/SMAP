<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;

class AddFacultyController extends Controller
{
    public function insertTeacherUser(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
        ]);

        try {

            $user = new User;
            $user->user_id = $request->id;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'teacher';
            $user->save();
            
            $teacher = new Teacher;
            $teacher->emp_id = $request->id;
            $teacher->contact = $request->contact;
            $teacher->fullname = $request->name;
            $teacher->save();
            return redirect()->route('admin.dashboard');

        } catch (QueryException $exception) {
            $errorCode = $exception->errorInfo[1];
            if ($errorCode == 1062) {
                return redirect()->route('add-faculty')->with('error', 'Emp ID already exists.');
            }
        }
    }
}
