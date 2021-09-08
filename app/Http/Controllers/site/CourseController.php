<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = Course::orderby('id', 'desc')->with(['images'])->get();
        return view('courses.courses',compact('courses'));
    }
}
