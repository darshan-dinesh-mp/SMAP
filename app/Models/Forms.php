<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;
    protected $table = "forms";

    protected $fillable = [
        'student_id',
        'sem',
        'field1',
        'field2',
        'field3',
        'field4',
        'field5',
        'field6',
        'sub1_att',
        'sub2_att',
        'sub3_att',
        'sub4_att',
        'sub5_att',
        'sub6_att',
        'field7',
        'field8',
        'field9',
        'field10',
        'field11',
        'field12',
        'field13',
        'field14',
    ];

}
