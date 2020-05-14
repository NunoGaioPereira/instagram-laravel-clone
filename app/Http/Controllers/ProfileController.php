<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Show the application dashboard.
    public function index($user)
    {
        // dd($user);
        // \App\User::find($user);
        // Fetch user with $user
        $user = User::find($user);

        return view('home', [
            'user' => $user  
        ]);
    }
}
