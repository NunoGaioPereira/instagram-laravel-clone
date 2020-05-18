<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{   
    // All routes in this controller need authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create'); // follow same convention as controller Posts/posts
        // return view('posts/create');
    }

    public function index()
    {
        // Get all id's of people I am following
        $users = auth()->user()->following()->pluck('profiles.user_id');
        // $posts = Post::whereIn('user_id', $users)->orderBy('created_at', 'DESC')->get();
        $posts = Post::whereIn('user_id', $users)->latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function store()
    {   
        //dd(request()->all());
        $data = request()->validate([
            // 'novalidationfield' => '',
            'caption' =>'required',
            'image' =>['required', 'image'] // 'image' =>'required|image'
        ]);
        
        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200); // make image and resize to 1200px to 1200px
        $image->save();
        
        // Only save post to authenticated user
        //auth()->user()->posts()->create($data);
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/' . auth()->user()->id);

        // \App\Post::create($data);

        // \App\Post::create([
        //     'caption' => $data['caption']
        // ]);

        // $post = new \App\Posts();
        // $post->caption = $data['caption'];
        // $post->save();
    }

    public function show(\App\Post $post) // Route model binding to fetch post automatically
    {
        // return view('posts.show', [
        //     'post' => post,
        // ])
        return view('posts.show', compact('post'));
    }
}
