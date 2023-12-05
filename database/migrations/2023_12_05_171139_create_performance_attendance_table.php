<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformanceAttendanceTable extends Migration
{
    public function up()
    {
        Schema::create('performance_attendance', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->enum('semester', ['1st', '2nd', '3rd', '4th']);
            $table->enum('mse', ['1', '2', '3']);
            $table->integer('marks');
            $table->integer('attendance');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('performance_attendance');
    }
}
