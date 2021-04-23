<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();
        return view('index',['posts' => $posts]);
    }
}