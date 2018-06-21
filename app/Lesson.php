<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function clubs(){
    	return $this->belongsTo('App\Club');
    }

    public function students(){
    	return $this->belongsToMany('App\Student', 'attendance');
    }

}
