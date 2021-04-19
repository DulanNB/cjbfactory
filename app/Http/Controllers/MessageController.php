<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {

        $data=array();
        $data['contactName']=$request->name;
        $data['contactEmail']=$request->email;
        $data['contactMessage']=$request->message;
        $data['contactSubject']=$request->subject;
        $data['Title']="New customer feedback";


        try {
            Mail::send('email_template', $data, function ($message) {
                // $to_name=$this->name;
                $to_email='dultude@gmail.com';
                $message->to($to_email)->subject
                ('chandana.com Contact Us');
            });

            return redirect('/contact')->with('success','Your Message Has been sent');

        } catch (\Throwable $th) {

            return redirect('/contact')->with("error","Your Message Has been Not sent");
        }

    }
}
