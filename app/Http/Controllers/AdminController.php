<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data["countEnquiries"] = DB::table("enquiry")->count();
        $data["countFeedback"] = DB::table("feedback")->count();
        return view("Admin.Dashboard", with(compact("data")));
    }

    public function readEnquiries(){
        $fetchEnquiries = DB::table("enquiry")->get();
        return view("Admin.Enquiries", with(compact("fetchEnquiries")));
    }

    public function readTestimonials(){
        $fetchTestimonials = DB::table("feedback")->get();
        return view("Admin.Testimonials", with(compact("fetchTestimonials")));
    }
}
