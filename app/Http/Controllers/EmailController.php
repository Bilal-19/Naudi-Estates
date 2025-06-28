<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryEmail;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function sendEmail(){
        Mail::to("bilalmuhammadyousuf543@gmail.com")->
        send(new EnquiryEmail("Bilal","bilal@gmail.com","hELLO"));
    }
}
