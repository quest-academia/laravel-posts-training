<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }

    public function store(CommentRequest $request)
    {
        $comment = new Comment;
        $comment->comment = $request->input('comment.' . $request->post_id);
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect('/');
    }

}
