<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function store(CommentRequest $request)
    {
        //$params = $request->validate([
        //    'user_id' => 'required|exists:post,id',
        //    'post_id' => 'required|exists:post_id',
        //    'comment' => 'max:40',
        //]);

        //$user = User::findOrFail($params['user_id']);
        //$post = Post::findOrFail($params['post_id']);
        //$post->comment()->create($params);
            $params =[
                'user_id' => $request->user_id,
                'post_id' => $request->post_id,
                'comment' => $request->comment,
            ];


        //Comment::create($params);
        //return redirect()->route('/', ['user' => $user], ['post' => $post]);
        $comment = new Comment;
        $comment->fill($params)->save();

        return redirect()->route('/', [$params['user_id'], [ 'post_id']]);
    }
    //    public function index()
    //{
    //    $comment = Comment::All();
    //    return view('welcome', ['comment' => $comment]);
    //}
}