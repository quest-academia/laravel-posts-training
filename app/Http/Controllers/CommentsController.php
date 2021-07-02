<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $postId)
    {
        $comment = new Comment(['comment' => $request->comment]);
        $post = Post::findOrFail($postId);
        $post->comments()->save($comment);

        return redirect('/');
    }
}
