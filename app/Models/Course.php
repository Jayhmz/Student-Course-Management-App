<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
      'student_id', 'course_code', 'course_title'
    ];

    public function student(){
      return $this->belongsTo(Student::class);
    }
}
