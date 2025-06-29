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

    public function getEmailCount($emailAddress)
    {
        $isAlreadyExist = DB::table("users")->
            where("email", "=", $emailAddress)->
            count();
        return $isAlreadyExist;
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

        $isAlreadyExist = $this->getEmailCount($getEmail);

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

    public function Login()
    {
        return view("AuthLayout.Login");
    }

    public function loginAttempt(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required",
            "password" => "required",
        ]);

        // check if email exist
        $isAlreadyExist = $this->getEmailCount($request->email);

        if ($isAlreadyExist == 0) {
            toastr()->info("User with this email doesnot exist.");
        } else {
            $haveAccount = Auth::attempt($credentials);
            if ($haveAccount) {
                toastr()->success("Redirecting to Admin Dashboard.");
                return view("Admin.Dashboard");
            } else {
                toastr()->warning("Invalid credentials");
            }
        }
        return redirect()->back();
    }

    // Forget Password


    // Logout
    public function SignOut()
    {
        if (Auth::user()) {
            Auth::logout();
            toastr()->success("Logged out successfully.");
            return redirect()->route("Login");
        }
    }
}
