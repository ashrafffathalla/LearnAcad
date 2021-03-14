<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded= ['id'];

    public function cat(){
       return $this->belongsTo('App\cat');
    }
    public function trainer()
    {
        return $this->belongsTo('App\trainer');
    }
    public function students(){

       return $this->belongsToMany('App\Student');

    }
}
