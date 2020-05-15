<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{   
    public function create()
    {
        return view('posts.create'); // follow same convention as controller Posts/posts
        // return view('posts/create');
    }

    public function store()
    {   
        //dd(request()->all());
        $data = request()->validate([
            // 'novalidationfield' => '',
            'caption' =>'required',
            'image' =>['required', 'image']
            // 'image' =>'required|image'
        ]);

        // Only save post to authenticated user
        auth()->user()->posts()->create($data);

        // \App\Post::create($data);

        // \App\Post::create([
        //     'caption' => $data['caption']
        // ]);

        // $post = new \App\Posts();
        // $post->caption = $data['caption'];
        // $post->save();
    }
}
