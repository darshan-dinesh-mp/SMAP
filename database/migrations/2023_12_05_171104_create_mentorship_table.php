<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorshipTable extends Migration
{
    public function up()
    {
        Schema::create('mentorship', function (Blueprint $table) {
            $table->string('mentor_id');
            $table->string('mentee_id');
            $table->primary(['mentor_id', 'mentee_id']);
            $table->foreign('mentor_id')->references('emp_id')->on('teachers');
            $table->foreign('mentee_id')->references('student_id')->on('students');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentorship');
    }
}
