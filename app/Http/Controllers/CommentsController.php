<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request, $post_id) 
    {
        $this->validate($request, [
        'body' => 'required'
        ]);

        $comment = new Comment(['body' => $request->body]);
        $post = Post::findOrFail($post_id);
        $post->comments()->save($comment);

        return redirect()
        ->action('PostsController@index', $post->id);
    }
}
