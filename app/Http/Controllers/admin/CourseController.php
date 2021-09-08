<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    public function index(){
        return view('admin.courses.addcourse');
    }

    public function store(Request $request){
        $course = new Course();
        $course->name = $request->input('name');
        $course->level = $request->input('level');
        $course->date = $request->input('date');
        $course->user_id = 1;
        $course->save();
        return redirect()->route('dashboard');
    }
}
