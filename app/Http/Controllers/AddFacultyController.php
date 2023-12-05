<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddFacultyController extends Controller
{
    public function insertTeacherUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->role = 'teacher';
        $user->save();
        // Retrieve the user_id generated for the new user
        $userId = $user->id;
        
    }
}
