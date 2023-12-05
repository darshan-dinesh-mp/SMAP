<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMentorshipTable extends Migration
{
    public function up()
    {
        Schema::create('mentorship', function (Blueprint $table) {
            $table->unsignedBigInteger('mentor_id');
            $table->unsignedBigInteger('mentee_id');
            $table->primary(['mentor_id', 'mentee_id']);
            $table->foreign('mentor_id')->references('id')->on('teachers');
            $table->foreign('mentee_id')->references('id')->on('students');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentorship');
    }
}
