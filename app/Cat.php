<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $guarded= ['id'];

    
    public function course(){
        return $this->hasMany('App\Course');

    }

}
