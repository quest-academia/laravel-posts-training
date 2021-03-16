<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($posts_id)
    {
        $posts = Post::findOrFail($posts_id);
        return view('posts.show', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $params = $request->validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);
        Post::create($params);
        return redirect()->route('top');
    }

    public function edit($posts_id)
    {
        $posts = Post::findOrFail($posts_id);
        return view('posts.edit', [
            'posts' => $posts
        ]);
    }

    //public function destroy($posts_id)
    //{
    //    $posts = Post::findOrFail($posts_id);
    //    return view('posts.show', [
    //        'posts' => $posts
    //    ]);
    //}
}