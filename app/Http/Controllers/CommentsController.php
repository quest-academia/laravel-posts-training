<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function comment(Request $request)
    {
        //$data = $request->validate([
        //    'comment' => 'required|max:40'
        //]);

        //$data = [
        //    'post_id' => $request->post_id,
        //    'user_id' => $request->user()->id,
        //    'comment' => $request->comment,
        //];

        $comment = new Comment(['comment' => $request->comment]);
        $comment = Post::find(($request->post_id));
        $comment->user_id = Auth::user()->id;
        $comment->comments()->save($comment);
        dd($id);
        //return redirect()->route('comment', ['comment' => $comment]);
        return App\Comment::with($user_id, ['comment' => $comment])->get();
    }
}
