<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(4);
        return view('posts.index',[
            'posts' => $posts
        ]);
    }
}
