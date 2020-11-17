<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Import model
use App\File;

class Teacher extends Model
{
    public function files()
    {
        return $this->hasMany(File::class);
    }
}
