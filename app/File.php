<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Import other models.
use App\Student;
use App\Teacher;

class File extends Model
{
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
