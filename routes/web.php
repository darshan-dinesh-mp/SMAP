<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/custom-login', 'LoginController@customLogin')->name('custom.login');

Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', 'DashboardController@student')->name('student.dashboard');
    Route::get('/teacher/dashboard', 'DashboardController@teacher')->name('teacher.dashboard');
});