<?php

namespace App\Http\Controllers;

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
            'password' => 'required',
        ]);

        $user = new User;
        $user->user_id = $request->id;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'teacher';
        $user->save();

        $teacher = new Teacher;
        $teacher->teacher_id = $request->id;
        $teacher->fullname = $request->name;
        $teacher->save();

        return redirect()->route('admin.dashboard');
    }
}
