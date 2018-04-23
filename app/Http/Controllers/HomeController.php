<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    function send_Email(Request $request){
        $msg = $request->message;
        $wholeMsg = $msg;
        Mail::raw($wholeMsg, function ($message) use ($request) {
            $message->to('plazajosue2@gmail.com');
            $message->from($request->email, $request->name);
            $message->subject('CUSTOMER CONSULTANT REQUEST ');
        });
        $responseMsg = "Your message was successfully sent.";
        return $responseMsg;
    }
}
