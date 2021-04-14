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
    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->input('comment', $request->post_id);
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect('/');
    }
}
