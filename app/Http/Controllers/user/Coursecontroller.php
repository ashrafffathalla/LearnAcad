<?php

namespace App\Http\Controllers\user;

use App\Cat;
use App\course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
public function cat($id)
{
 
  $data['cat'] = Cat::findORfail($id);
  $data[ 'courses'] = Course::where('cat_id', $id )->paginate(3);
  //dd($data);
  //dd($data['courses']);
    return view('front.courses.cat',compact('data'));
   

}    
public function show($id , $c_id)
{

  $data['course'] = course::findORfail($c_id);
  return view('front.courses.show')->with($data);

}

}


