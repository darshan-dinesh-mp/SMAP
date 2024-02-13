<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorshipTable extends Migration
{
    public function up()
    {
        Schema::create('mentorship', function (Blueprint $table) {
            $table->string('mentor_id')->foreign()->references('emp_id')->on('teachers');
            $table->string('mentee_id')->foreign()->references('student_id')->on('students');
            $table->primary(['mentor_id', 'mentee_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentorship');
    }
}
