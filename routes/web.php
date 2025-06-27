<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("/", [UserController::class,"index"])->name("Home");
Route::get("/services", [UserController::class,"services"])->name("Service");
Route::get("/pricing", [UserController::class,"pricing"])->name("Pricing");
Route::get("/contact", [UserController::class,"contact"])->name("Contact");
Route::get("/testimonials", [UserController::class,"feedback"])->name("Testimonials");

Route::post("/create-feedback", [UserController::class,"createFeedback"])->name("createFeedback");
Route::post("/create-enquiry", [UserController::class,"createEnquiry"])->name("createEnquiry");


Route::get("/admin-dashboard", [AdminController::class,"index"])->name("Dashboard");
Route::get("/enquiries", [AdminController::class,"readEnquiries"])->name("Enquiries");
Route::get("/client-feedback", [AdminController::class,"readTestimonials"])->name("ClientFeedback");


Route::get("/sign-up", [AuthenticationController::class,"SignUp"])->name("SignUp");
Route::post("/create-account", [AuthenticationController::class,"createAccount"])->name("CreateAccount");

Route::get("/log-in", [AuthenticationController::class,"Login"])->name("Login");
Route::post("/login-attempt", [AuthenticationController::class,"loginAttempt"])->name("LoginAttempt");

