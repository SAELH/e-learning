<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class ElearningController extends Controller
{
    public function get_courses(){

        $courses = Course::all();
        return view('landpage',compact('courses'));
    }
}
