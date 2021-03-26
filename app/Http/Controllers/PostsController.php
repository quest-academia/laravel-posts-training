<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('posts.index',['posts' => $posts]);
    }

    public function show($posts_id)
    {
        $posts = Post::findOrFail($posts_id);
        return view('posts.show', ['posts' => $posts]);
    }
}
