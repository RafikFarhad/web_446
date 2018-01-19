<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public function teams()
    {
        return $this->belongsToMany('App\Team')
            ->withPivot('exam_id', 'team_id', 'mark')->withTimestamps();
    }
}
