<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Show the application dashboard.
    public function index(User $user)
    {
        // dd($user);
        // \App\User::find($user);
        // Fetch user with $user
        // $user = User::find($user);
        // $user = User::findOrFail($user);

        // return view('profiles.index', [
        //     'user' => $user  
        // ]);
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        // can only edit if authorized
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {   
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);


        // With user exposed -> WRONG!
        // $user->profile->update($data);
        // return redirect("/profile/{$user->id}");
        
        // With auth
        // auth()->user()->profile->update($data);
        // return redirect("/profile/{$user->id}");

    }
}
