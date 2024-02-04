<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Models\Teacher;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Psy\Readline\Hoa\Console;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('admin/index');
});


Route::get('/profile', function () {
    return view('teacher/teacherprofile');
})->name('teacher-profile');

Route::get('/dashboard', function () {
    if (Session::has('user_id') && Session::get('role') == "teacher") {
        return view('teacher/dashboard');
    } else {
        return redirect('/');
    }
})->name('teacher_dashboard');



Route::get('/add-faculty', function () {
    return view('admin/add-faculty');
})->name('add-faculty');

Route::get('/edit-faculty/{teacher_id}', function ($teacher_id) {
    $teachers = Teacher::where(['emp_id' => $teacher_id])->first();
    return view('admin.edit-faculty', compact('teachers'));
})->name('edit-faculty');

Route::get('/add-student', function () {
    return view('teacher/add-student');
})->name('add-student');



Route::get('/student_dashboard', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/dashboard');
    } else {
        return redirect('/');
    }
})->name('student_dashboard');

Route::get('/student-profile', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/studentprofile');
    } else {
        return redirect('/');
    }
})->name('student-profile');

Route::get('/third-sem-subjects', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/subjects');
    } else {
        return redirect('/');
    }
})->name('third-sem-subjects');

Route::get('/edit-profile', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/edit-profile');
    } 
    else if (Session::has('user_id') && Session::get('role') == "teacher") {
        return view('teacher/edit-profile');
    } 
    else {
        return redirect('/');
    }
})->name('edit-profile');






Route::get('/redirecting', [StudentController::class, 'fetch'])->name('feedback-form');
Route::get('student-feedback-form', function () {
    return view('student/forms/feedback-form');
})->name('student-feedback-form');
Route::post('/submit-form', [StudentController::class, 'insert_form_data'])->name('submit-form');

Route::get('first-mse-form', function () {
    return view('student/forms/mse-one-form');
})->name('first-mse-form');

Route::get('second-mse-form', function () {
    return view('student/forms/mse-two-form');
})->name('second-mse-form');





Route::get('/mse-one-form', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/forms/mse-one-form');
    } else {
        return redirect('/');
    }
})->name('mse-one-form');

Route::get('/mse-two-form', function () {
    if (Session::has('user_id') && Session::get('role') == "student") {
        return view('student/forms/mse-two-form');
    } else {
        return redirect('/');
    }
})->name('mse-two-form');







Route::post('/add_faculty', [AdminController::class, 'addFaculty'])->name('add_faculty');
Route::post('/edit_faculty', [AdminController::class, 'editFaculty'])->name('edit_faculty');

Route::post('/student_staff_login', [LoginController::class, 'student_staff_login'])->name('student_staff_login');
Route::post('/admin_login', [LoginController::class, 'admin_login'])->name('admin_login');


Route::get('/error', function () {
    return view('error');
})->name('error');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');
    Route::get('/teacher/dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
});
