<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralFormController;

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

Route::get('/', function () {                                            // index routes
    return view('index');
});

Route::get('/admin', function () {
    return view('admin/index');
});






Route::get('/dashboard', function () {                                   // student
    if (Session::has('user_id') && Session::get('role')=="student") {
        return view('student/dashboard');
    } else {
        return redirect('/');
    }
})->name('dashboard');

Route::get('/student-profile', function () {
    if (Session::has('user_id') && Session::get('role')=="student") {
        return view('student/studentprofile');
    } else {
        return redirect('/');
    }
})->name('student-profile');

Route::get('/edit-profile', function () {
    if (Session::has('user_id') && Session::get('role')=="student") {
        return view('student/edit-profile');
    } else {
        return redirect('/');
    }
})->name('edit-profile');






Route::get('/general-form', function () {                               //forms(mse)
    if (Session::has('user_id') && Session::get('role')=="student") {
        return view('student/forms/general-form');
    } else {
        return redirect('/');
    }
})->name('general-form');

Route::get('/general-form', [GeneralFormController::class, 'fetch'])->name('general-form');





Route::get('/mse-one-form', function () {
    if (Session::has('user_id') && Session::get('role')=="student") {
        return view('student/forms/mse-one-form');
    } else {
        return redirect('/');
    }
})->name('mse-one-form');

Route::get('/mse-two-form', function () {
    if (Session::has('user_id') && Session::get('role')=="student") {
        return view('student/forms/mse-two-form');
    } else {
        return redirect('/');
    }
})->name('mse-two-form');









Route::post('/student_staff_login', [LoginController::class, 'student_staff_login'])->name('student_staff_login');
Route::post('/admin_login', [LoginController::class, 'admin_login'])->name('admin_login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');
    Route::get('/teacher/dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
});
