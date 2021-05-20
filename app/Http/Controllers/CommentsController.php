<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * コメント投稿処理
     *
     */
    public function store(CommentStoreRequest $request, Comment $comment)
    {
        // コメント保存
        $comment->user_id = Auth::id();
        $comment->post_id = $request->post_id;
        $comment->comment = $request->comment[$request->post_id];
        $comment->save();

        return redirect('/');
    }

    /**
     * コメント投稿編集
     *
     */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);

        if (auth()->user()->id !== $comment->user_id) {
            return redirect('/')->with('error', '許可されていない操作です');
        }

        return view('post.commentEdit', ['comment' => $comment]);
    }

    /**
     * コメント投稿更新
     *
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'comment' => 'required|max:140',
        ]);

        $comment = Comment::findOrFail($id);

        if (auth()->user()->id !== $comment->user_id) {
            return redirect('/')->with('error', '許可されていない操作です');
        }
        
        $comment->comment = $request->comment;
        $comment->save();

        return redirect('/')->with('message', 'コメントを更新しました。');
    }

    /**
     * コメント削除処理
     */
    public function destroy(Comment $comment)
    {
        if ($comment->user->id != Auth::id()) {
            return redirect('/')->with('error', 'コメントの削除に失敗しました。');
        }

        $comment->delete();
        return redirect('/')->with('message', 'コメントを削除しました。');
    }
}
