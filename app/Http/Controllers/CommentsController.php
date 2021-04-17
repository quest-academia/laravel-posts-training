<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function comment(Request $request)
    {
        $request->validate([
            'comment' => 'required|max:40'
        ]);

        $array = array($request->comment);
        $comments = implode(",", $array);

        $data = [
            'post_id' => $request->post_id,
            'user_id' => $request->user()->id,
            'comment' => $request->input($comments),
        ];

        $comment = new Comment;
        $comment->fill($data)->save();

        return redirect('/');
    }

    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->input('comment', $request->post_id);
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect('/');
    }
}
