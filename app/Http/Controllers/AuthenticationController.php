<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetEmail;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

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
    public function forgetPassword()
    {
        return view("AuthLayout.ForgetPassword");
    }

    // Reset Password
    public function resetPassword(Request $request)
    {
        $request->validate([
            "email" => "required"
        ]);

        // Check if email exist
        $getEmail = $request->email;
        $isAlreadyExist = $this->getEmailCount($getEmail);

        // Create 6 digit new password & Store it into DB
        $newPassword = random_int(100000, 999999);

        if ($isAlreadyExist == 0){
            toastr()->info("User with this email doesnot exist.");
            return redirect()->back();
        } else {
            $updatePassword = DB::table("users")->update([
                "password" => Hash::make($newPassword),
                "updated_at" => now()
            ]);

            if ($updatePassword){
                Mail::to($getEmail)->
                    send(new PasswordResetEmail($newPassword));
                    toastr()->success("New password is created and sent to your email.");
                return redirect()->back();
            }
        }
    }

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
