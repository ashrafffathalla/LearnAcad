@extends('user.layout.master')
@section('content')

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>Home page<span>/</span>Courses <span>/</span> {{$course->cat->name}} <span>/</span> {{$course->name}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                <img class="img-fluid" src="{{asset('assets/uploads/courses/' .$course->img)}}" alt="">
                </div>
                <div class="content_wrapper">
                 {!! $course->desc !!}
                    
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <div class="sidebar_top">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                            <p> {{ $course->trainer->name }}</p>
                                <span class="color">George Mathews</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span>$ {{ $course->price }}</span>
                            </a>
                        </li>
                        
                        </li>

                    </ul>
                  
                </div>

                <h4 class="title">Reviews</h4>
              
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->


@endsection