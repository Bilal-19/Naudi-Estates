<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
    public function SignUp()
    {
        return view("AuthLayout.Signup");
    }

    public function createAccount(Request $request)
    {
        $request->validate([
            "username" => "required",
            "useremail" => "required",
            "password" => "required"
        ]);

        // check if account already exist
        $getEmail = $request->useremail;

        $isAlreadyExist = DB::table("users")->
            where("email", "=", $getEmail)->
            count();

        if ($isAlreadyExist >= 1) {
            toastr()->warning("User with this email already exist.");
        } else {
            $isCreated = DB::table("users")->insert([
                "name" => $request->username,
                "email" => $request->useremail,
                "password" => Hash::make($request->password),
                "created_at" => now()
            ]);

            if ($isCreated) {
                toastr()->success("Account successfully created.");
            } else {
                toastr()->info("Something went wrong. Please try again later.");
            }
        }
        return redirect()->back();
    }

    public function Login(){
        return view("AuthLayout.Login");
    }
}
