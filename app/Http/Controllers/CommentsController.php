<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    //public function __construct()
    //{
    //    $this->middleware('auth')->except(['index']);
    //}

    public function store(Request $request)
    {
        $params = $request->validate([
            'comment' => 'max:40',
        ]);

        Comment::create($params =[
            'user_id' => $request->user()->id,
            'post_id' => $request->post_id,
            'comment' => $request->comment,
        ]);

    //        $comment = new Comment;
    //        $comment->fill($params)->save();

            $post->comment()->save($comment);
            return redirect()->route('/', [$params['user_id'], [ 'post_id']]);
    }

    public function show($user_id, $post_id)
    {
        $post = Post::findOrFail($post_id);
        $user = User::where('id', $post->user_id)->first();

        return view('test', compact('user', 'post'));
    }
}
