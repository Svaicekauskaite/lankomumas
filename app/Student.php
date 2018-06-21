<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function clubs(){
        return $this->belongsToMany('App\Club', 'registration');
    }

    public function lessons(){
    	return $this->belongsToMany('App\Lesson', 'attendance')->withPivot('attended');
    }
}
