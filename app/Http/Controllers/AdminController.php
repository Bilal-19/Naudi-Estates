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
        $data["countUsers"] = DB::table("users")->
            where('role', '=', 'Admin')->
            count();
        return view("Admin.Dashboard", with(compact("data")));
    }

    public function readEnquiries(){
        $fetchEnquiries = DB::table("enquiry")->get();
        return view("Admin.Enquiries", with(compact("fetchEnquiries")));
    }
}
