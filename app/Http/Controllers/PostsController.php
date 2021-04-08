<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        return back();
    }
}
