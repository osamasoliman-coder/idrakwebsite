<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Image;


class ImagesController extends Controller
{
    public function index($id){
        $course = Course::find($id);
        return view('admin.courses.addimages',compact('course'));
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'filenames' => 'required'
        ]);

        if ($request->hasfile('filenames')) {
            $images = $request->file('filenames');
            foreach ($images as $image) {
                $six_digit_random_number = mt_rand(100000, 999999);
                $name = $six_digit_random_number . '.' . $image->extension();
                $path = 'images/courses/';
                $image->move($path, $name);

                $image = new Image();
                $image->url = $name;
                $image->course_id = $id;
                $image->save();
            }
        }
        return redirect()->route('dashboard');
    }

}
