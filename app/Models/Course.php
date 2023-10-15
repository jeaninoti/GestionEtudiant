<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Grade;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['Title','Description'];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'course_student', 'course_id', 'student_id');
    }

    public function grades()
    {
        return $this->hasMany(Grade::class, 'course_id');
    }
}