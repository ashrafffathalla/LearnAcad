<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Student extends Model
{
    protected $guarded= ['id'];
    public function courses(){

       return $this->belongsToMany('App\Course');
    }
}
