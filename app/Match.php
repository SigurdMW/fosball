<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function users(){
    	$this->hasMany('App\User');
    }
}
