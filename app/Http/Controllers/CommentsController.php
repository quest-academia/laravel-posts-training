<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use Auth;
use Validator;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'post_id' => 'required|exists:posts,id',
        'comment' => 'required|max:1000',
    ]);

    $post = Post::findOrFail($params['post_id']);
    $post->comments()->create($params);

    return redirect('/');
    }
}
