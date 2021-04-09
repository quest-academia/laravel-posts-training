<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
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
