<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentStoreRequest;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * コメント投稿処理
     *
     */
    public function store(CommentStoreRequest $request, Comment $comment)
    {
        $comment->user_id = $request->user_id;
        $comment->post_id = $request->post_id;
        $comment->comment = $request->comment[$request->post_id];
        $comment->save();
        return redirect('/');
    }
}
