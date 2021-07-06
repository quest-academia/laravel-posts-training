<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Post;

class CommentsController extends Controller
{
    public function store(CommentRequest $request)
    {

        // viewから受け取ったコメントをインスタンス化
        $comment = new Comment(['comment' => $request->comment]);
        // post_idから投稿を取り出す
        $post = Post::findOrFail($request->post_id);

        // ログインユーザーからコメントユーザーを取得
        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $post->id;
        $comment->comment = $request->comment;

        //コメントの保存
        $comment->save();

        return redirect('/');
    }
}
