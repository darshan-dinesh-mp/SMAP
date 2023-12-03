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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('sem')->constrained('semester','sem')->onDelete('cascade');
            $table->string('field1');
            $table->string('field2');
            $table->string('field3');
            $table->string('field4');
            $table->string('field5');
            $table->string('field6');
            $table->integer('sub1_att');
            $table->integer('sub2_att');
            $table->integer('sub3_att');
            $table->integer('sub4_att');
            $table->integer('sub5_att');
            $table->integer('sub6_att');
            $table->string('field7');
            $table->string('field8');
            $table->string('field9');
            $table->string('field10');
            $table->string('field11');
            $table->string('field12');
            $table->string('field13');
            $table->string('field14');
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
        Schema::dropIfExists('forms');
    }
};
