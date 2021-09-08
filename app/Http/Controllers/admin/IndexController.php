<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class IndexController extends Controller
{
     public function index()
    {
        $courses = Course::all();
        return view('admin.index',compact('courses'));
    }
}
