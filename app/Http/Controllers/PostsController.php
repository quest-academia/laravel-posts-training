<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();

        return view('posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body'=>'required',
        ]);
        
        Post::create($params);
        
        return redirect()->route('/');
    }

}