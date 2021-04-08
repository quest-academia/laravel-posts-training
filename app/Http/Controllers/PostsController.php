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
        $posts = Post::with(['comments'])->orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
    }

    public function comment(Request $request, $post_id)
    {
        $comment = new Comment(['comment' => $request->comment]);
        $post = Post::findOrFail('$post_id');
        $post->comments()->save($comment);

        return \App\Comment::with($user_id)->get();
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        $post ->delete();
        return redirect('/');
    }
}
