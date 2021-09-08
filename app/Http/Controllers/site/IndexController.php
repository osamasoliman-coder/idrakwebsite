<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Image;
class IndexController extends Controller
{
    public function index(){
        $courses = Course::orderby('id', 'desc')->with(['images'])->get();
        return view('index',compact('courses'));
    }

    public function showImages($name){
        $course = Course::where('name',$name)->first();
        $images = Image::where('course_id', $course->id)->paginate(9);
        return view('courses.coursedetails',compact('images'));
    }
}
