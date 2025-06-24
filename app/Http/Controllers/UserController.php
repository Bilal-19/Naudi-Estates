<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("Visitors.Home");
    }

    public function services(){
        return view("Visitors.Services");
    }
}
