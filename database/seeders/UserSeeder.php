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
            "user_id" => "admin23mca",
            "email" => "admin@example.com",
            "password" => bcrypt("password"),
            "role" => "admin",
        ]);

        DB::table("users")->insert([
            "user_id" => "student23mca",
            "email" => "student@example.com",
            "password" => bcrypt("password"),
            "role" => "student",
        ]);

    }
}
