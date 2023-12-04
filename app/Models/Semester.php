<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'semester';
    protected $primaryKey = 'sem';

    protected $fillable = [
        'sem',
        'sub1',
        'sub2',
        'sub3',
        'sub4',
        'sub5',
        'sub6',
    ];
}
