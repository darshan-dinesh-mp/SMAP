<?php

// database/migrations/YYYY_MM_DD_create_teachers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); // This line generates the id column
            $table->string('department');
            // Add other teacher-specific fields as needed
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Rename the foreign key column
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
