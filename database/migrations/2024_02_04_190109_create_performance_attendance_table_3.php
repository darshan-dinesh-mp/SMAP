<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance_attendance_3', function (Blueprint $table) {
            $table->string('student_id')->foreign()->references('student_id')->on('students');
            $table->integer('semester')->foreign()->references('semester_number')->on('semesters');
            $table->string('subject_code');
            $table->integer('attendance');
            $table->primary(['student_id', 'semester','subject_code']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance_attendance_3');
    }
};
