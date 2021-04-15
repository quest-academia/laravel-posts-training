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
        $post = Post::findOrFail($posts_id);
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('top');
    }

    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', ['post' => $post]);
    }

    public function update($posts_id,Request $request)
    {
        $data = [
            'title' => $request->title,
            'body' => $request->body,
        ];
        $request->validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);
        $post = Post::findOrFail($posts_id);
        $post->fill($data)->save();
        return redirect('/');
    }

}
