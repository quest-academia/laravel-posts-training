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
        $post = Post::findOrFail('$post_id');
        $post->comments()->save($comment);

        return \App\Comment::with($user_id)->get();
    }
}
