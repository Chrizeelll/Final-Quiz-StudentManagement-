<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'stud_table';

    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'add',
        'dob',
    ];
}
