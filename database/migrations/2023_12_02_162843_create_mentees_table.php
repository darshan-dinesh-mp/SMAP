<?php

// database/migrations/YYYY_MM_DD_create_mentees_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenteesTable extends Migration
{
    public function up()
    {
        Schema::create('mentees', function (Blueprint $table) {
            $table->foreignId('mentor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('mentee_id')->constrained('users')->onDelete('cascade');
            $table->primary(['mentor_id', 'mentee_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('mentees');
    }
}
