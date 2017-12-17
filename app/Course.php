<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function teams()
    {
        return $this->hasMany('App\Team');
    }

    public function exams()
    {
        return $this->hasMany('App\Exam');
    }


    public function team_count()
    {
        return $this->teams()->count();
    }

    public function exam_count()
    {
        return $this->exams()->count();
    }



    public function student_count()
    {
        $tot = 0;
        foreach ($this->teams as $team)
            $tot += $team->students_count();
        return $tot;
    }



}
