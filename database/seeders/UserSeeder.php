<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Data that must present in the table are given here. and this seeder is run to insert these data into the table. 
        
        //admin
        DB::table("users")->insert([
            "name"=> "admin name",
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("abc"),
            "role"=>"admin",
        ]);

        // Create a student
        DB::table('users')->insert([
            'name' => 'Student Name',
            'email' => 'student@example.com',
            'password' => Hash::make('password'), // Use the Hash facade to hash passwords
            'role' => 'student',
        ]);

        // Create a teacher
        DB::table('users')->insert([
            'name' => 'Teacher Name',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password'),
            'role' => 'teacher',
        ]);
    }
}
