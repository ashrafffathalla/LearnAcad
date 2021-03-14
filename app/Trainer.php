<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $guarded= ['id'];

    public function course(){

        return $this->hasMany('App\course');
    }    
}
