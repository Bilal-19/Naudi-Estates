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

    public function readEnquiries()
    {
        $fetchEnquiries = DB::table("enquiry")->get();
        return view("Admin.Enquiries", with(compact("fetchEnquiries")));
    }

    public function readTestimonials()
    {
        $fetchTestimonials = DB::table("feedback")->get();
        return view("Admin.Testimonials", with(compact("fetchTestimonials")));
    }

    public function toggleVisibility($id)
    {
        $findRecord = DB::table("feedback")->
            where("id", "=", $id)->first();
        $currentVisibility = $findRecord->visibility;
        if ($currentVisibility == "yes") {
            DB::table("feedback")->
                where("id", "=", $id)->
                update(["visibility" => "no", "updated_at" => now()]);
            toastr()->success("Feedback is now hidden from public view.");
        } else {
            DB::table("feedback")->
                where("id", "=", $id)->
                update(["visibility" => "yes", "updated_at" => now()]);
            toastr()->success("Feedback is now visible on the website.");
        }
        return redirect()->back();
    }
}
