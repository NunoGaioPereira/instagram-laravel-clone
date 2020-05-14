<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Show the application dashboard.
    public function index()
    {
        return view('home');
    }
}
