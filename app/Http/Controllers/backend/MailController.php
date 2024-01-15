<?php

namespace App\Http\Controllers\backend;


use App\Mail\DemoMail;
use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function index(){
        return view('mail.email');
    }

   public function email(Request $request){   
    $email = $request->input('email');
    // dd($email);
    $mailData = $request->input('massage');
    Mail::to($email)->send(new DemoMail($mailData));
    return redirect()->back();
    dd('mail send successfully');
   }
}
