<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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

        if ($isFeedbackSubmitted){
            return redirect()->back();
        }
    }
}
