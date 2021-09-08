<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendMailHomeController extends Controller
{
    public function send(Request $request){


        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);


        $data = array(
            'name'      =>  $request->input('name'),
            'email'     =>   $request->input('email'),
            'message'   =>   $request->input('message')
        );


        Mail::to('info@idraksport.com')->send(new SendMail($data));
        session()->flash('success_message', 'successfully sent your email');
        return redirect()->route('home.index');
    }
}
