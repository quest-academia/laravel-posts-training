<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Comment;

class CommentsController extends Controller
{

public function store(CommentRequest $request, Comment $comment)

{   
   
    
    $comment->user_id = $request->user_id;
    $comment->post_id = $request->post_id;
    $comment->body = $request->body[$request->post_id];
    
    $comment->save();
    
    
    return redirect('/index');
       
}

    }

