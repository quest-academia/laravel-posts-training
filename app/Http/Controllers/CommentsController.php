<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('created_at','asc')->get();

        return view('posts.index',['comments'=>$comments]);
    }
    
    public function store(CommentRequest $request)
    {
        $savedata = [
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'body' => $request->body,
        ];
 
        $comment = new Comment;
        $comment->fill($savedata)->save();
 
        return redirect()->route('/', [$savedata['post_id']]);
    }
}
