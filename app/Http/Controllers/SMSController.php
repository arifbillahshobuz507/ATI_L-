<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SMSController extends Controller
{

    public function sms(){
        return view('sms.massage');
    }
    public function sendSms( Request $request)
    {

        $number = $request->input('number');
        $massage = $request->input('massage');

        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $sendnumber = getenv("TWILIO_PHONE");
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
            ->create(
                $number, // to
                [
                    "body" =>  $massage,
                    "from" =>  $sendnumber
                ]
            );
            return redirect()->route('sms');
    }
}
