<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
      'name', 'phone', 'email', 'address'
    ];
    public function course()
    {
      return $this->hasMany(Course::class);
    }
}
