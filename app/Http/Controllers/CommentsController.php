<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth')->except(['index']);
    //{

    public function store(Request $request, $post_id, $user_id)
    {
        $params = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
            'comment' => 'max:40',
        ]);

        $comment = new Comment(['comment' =>$request->comment]);
        $post = Post::findOrFail($request->post_id);
        $user = User::findOrFail($request->user_id);
        $post->comment()->save($comment);
        $comments = $post->comments->sortByDesc('created_at');
        //$user = DB::table('users')->findOrFail('id', $user_id)->first();

        return redirect()->route('post.index', ['post' => $post]);
    }
}
