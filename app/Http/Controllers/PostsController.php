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
        $request -> validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);
        
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = \Auth::id();
        $post->save();
        return redirect('/index');
    }

	public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        
        return view('posts.edit',['post'=>$post]);
    }
    
    public function update($post_id, Request $request)
    {
        $request -> validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);
        
        $post = Post::findOrFail($post_id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = \Auth::id();
        $post->save();
        return redirect('/index');
    }
}

