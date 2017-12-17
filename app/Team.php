<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
    public function students_count()
    {
        return $this->students()->count();
    }

}
