<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd(\Auth::id());
        $request->validate([
            'title' => 'required|max:50',
            'body' => 'required',
            // 'user_id' => 'required|max:20',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = \Auth::id();
        $post->save();
        // return back();
        return redirect('/');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('create.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'title' => $request->title,
            'body' => $request->body,
        ];
        $post = Post::findOrFail($id);
        $post->fill($data)->save();
        return redirect('/');
    }
    
    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        return redirect('/');
    }
}
