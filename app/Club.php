<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function lessons(){
    	return $this->hasMany('App\Lesson');
    }

    public function students(){
    	return $this->belongsToMany('App\Student', 'registrations');
    }
}
