<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Import Model
use App\File;

class Student extends Model
{
    public function file()
    {
        return $this->hasMany(File::class);
    }
}
