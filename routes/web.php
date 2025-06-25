<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [UserController::class,"index"])->name("Home");
Route::get("/services", [UserController::class,"services"])->name("Service");
Route::get("/pricing", [UserController::class,"pricing"])->name("Pricing");
Route::get("/contact", [UserController::class,"contact"])->name("Contact");
Route::get("/testimonials", [UserController::class,"feedback"])->name("Testimonials");
Route::post("/create-feedback", [UserController::class,"createFeedback"])->name("createFeedback");
