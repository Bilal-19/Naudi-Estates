<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("Admin.Dashboard");
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
