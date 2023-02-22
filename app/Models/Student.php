<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'birthdate', 'father_name', 'mother_name', 'course_grade', 'section', 'carnet', 'date_admission'];

}
