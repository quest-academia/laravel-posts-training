<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Post;

class CommentsController extends Controller
{
    public function store(CommentRequest $request)
    {

        $comment = new Comment(['comment' => $request->comment]);
        $post = Post::findOrFail($request->post_id);
        // dd($post);

        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $post->id;
        $comment->comment = $request->comment;
        $comment->save();

        return redirect('/');
    }
}
