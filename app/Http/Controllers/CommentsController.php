<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use App\Http\Requests\CommentRequest;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(CommentRequest $request)
    {
        $comment = new Comment;
        $comment->comment = $request->input('comment.'. $request->post_id);
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect('/');
    }

    public function edit($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);

        return view('comments.comment_edit', ['comment' => $comment]);
    }

    public function update($comment_id, Request $request)
    {

        $params = $request->validate([
        'comment' => 'required|max:40',
        ]);

        $comment = Comment::findOrFail($comment_id);
        $comment->fill($params)->save();

        return redirect('/');
    }

    public function destroy($comment_id)
    {
        $comment = Comment::findOrFail($comment_id)->delete();

        return redirect('/');
    }
}
