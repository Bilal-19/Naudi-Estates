<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view("Admin.Dashboard");
        } else {
            return view("AuthLayout.Login");
        }
    }

    public function readEnquiries()
    {
        if (Auth::check()) {
            $fetchEnquiries = DB::table("enquiry")->paginate(8);
            return view("Admin.Enquiries", with(compact("fetchEnquiries")));
        } else {
            return view("AuthLayout.Login");
        }
    }

    public function readTestimonials()
    {
        if (Auth::check()) {
            $fetchTestimonials = DB::table("feedback")->paginate(8);
            return view("Admin.Testimonials", with(compact("fetchTestimonials")));
        } else {
            return view("AuthLayout.Login");
        }
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
