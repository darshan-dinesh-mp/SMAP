<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackFormsTable extends Migration
{
    public function up()
    {
        Schema::create('feedback_forms', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->integer('semester');
            $table->integer('mse');
            // Add other fields related to feedback
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback_forms');
    }
}
