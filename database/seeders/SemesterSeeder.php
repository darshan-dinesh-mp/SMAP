<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semester')->insert([
            'sem' => '1',
            'sub1' => 'DSA',
            'sub2' => 'ADBS',
            'sub3' => 'SET',
            'sub4' => 'COA',
            'sub5' => 'MFCO',
            'sub6' => 'RMPE',
        ]);

    }
}