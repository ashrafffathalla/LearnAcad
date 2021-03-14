<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\Trainer;
use App\Student;
class HomepageController extends Controller
{
    //
    public function index()
    {
        $data['courses'] = Course::select('id','name','small_desc','cat_id','trainer_id','img','price')
        ->orderBy('id', 'desc')
        ->take(3)
        ->get();
// count courses and trainers and students ---animation
       $data['courses_count'] = Course::count();
       $data['trainers_count'] = Trainer::count();
       $data['students_count'] = Student::count();
       
        return view('user.index')->with($data);
    }


}
