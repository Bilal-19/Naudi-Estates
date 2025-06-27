<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get("/", [UserController::class,"index"])->name("Home");
Route::get("/services", [UserController::class,"services"])->name("Service");
Route::get("/pricing", [UserController::class,"pricing"])->name("Pricing");
Route::get("/contact", [UserController::class,"contact"])->name("Contact");
Route::get("/testimonials", [UserController::class,"feedback"])->name("Testimonials");
// Route::get("/calendar", [UserController::class,"calendar"])->name("Calendar");

Route::post("/create-feedback", [UserController::class,"createFeedback"])->name("createFeedback");
Route::post("/create-enquiry", [UserController::class,"createEnquiry"])->name("createEnquiry");


Route::get("/admin-dashboard", [AdminController::class,"index"])->name("Dashboard");
Route::get("/admin-enquiries", [AdminController::class,"readEnquiries"])->name("Enquiries");
