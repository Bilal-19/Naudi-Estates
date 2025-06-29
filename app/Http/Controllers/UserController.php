<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;

class UserController extends Controller
{
    public function index()
    {
        return view("Visitors.Home");
    }

    public function services()
    {
        return view("Visitors.Services");
    }

    public function pricing()
    {
        return view("Visitors.Pricing");
    }

    public function contact()
    {
        return view("Visitors.Contact");
    }

    public function feedback()
    {
        return view("Visitors.Testimonials");
    }

    public function calendar()
    {
        return view('Visitors.Calendar');
    }

    public function createFeedback(Request $request)
    {
        $request->validate([
            "username" => "required",
            "rating" => "required",
            "message" => "required",
        ]);

        $isFeedbackSubmitted = DB::table("feedback")->insert([
            "username" => $request->username,
            "rating" => $request->rating,
            "message" => $request->message,
            "created_at" => now()
        ]);

        if ($isFeedbackSubmitted) {
            toastr()->success("Thankyou for the feedback!");
        } else {
            toastr()->warning("Please enter all the required details");
        }
        return redirect()->back();
    }

    public function createEnquiry(Request $request)
    {
        $request->validate([
            "username" => "required",
            "useremail" => "required",
            "message" => "required",
        ]);

        $isEnquiryCreated = DB::table('enquiry')->insert([
            "username" => $request->username,
            "useremail" => $request->useremail,
            "usermessage" => $request->message,
            "created_at" => now()
        ]);

        if ($isEnquiryCreated) {
            Mail::to("propertymanagernaudi@gmail.com")->
                send(new EnquiryEmail(
                    $request->username,
                    $request->useremail,
                    $request->message
                ));
            toastr()->success("We've receive your message. Our team will contact you soon");
        } else {
            toastr()->warning("Please enter all the required details");
        }
        return redirect()->back();
    }
}
