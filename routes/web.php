<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','user\Homepagecontroller@index')->name('front.homepage');

Route::get('/courses/cat/{id}','user\Coursecontroller@cat')->name('front.courseCat');
Route::get('/courses/cat/{id}/course/{c_id}','user\Coursecontroller@show')->name('front.show');