<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function comment(CommentRequest $request, $post_id)
    {
        $comment = new Comment(['comment' => $request->comment]);
        $comment = Post::findOrFail('$post_id');
        $comment->user_id = Auth::user()->id;
        $post->comments()->save($comment);

        return \App\Comment::with($user_id)->get();
    }
}
