<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Controllers\CommentRequest;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function comment(CommentRequest $request, $post_id)
    {
        $comment = new Comment(['comment' => $request->comment]);
        $comment = Post::findOrFail('$post_id');
        $comment->user_id = Auth::user()->id;
        $post->comment()->save($comment);

        return \App\Comment::with($user_id)->get();
    }

    public function edit($comment_id)
    {
        $comment = Comment::findOrFail($comment_id)->first();
        return view('comments.comment_edit', [
            'comment' => $comment
        ]);
    }

    public function update(CommentRequest $request, $post_id)
    {
        $params = $request->validate([
            'post_id' => 'required'|'exits:post,id',
            'comment' => 'required|max;40',
        ]);
        //$comment = Comment::findOrFail($params['post_id']);
        $comment = Comment::findOrFail(['comment' => $request->comment]);
        $comment->fill($request->all())->save();
        return redirect()->route('/', [
            'post' => $post
        ]);
    }
}
