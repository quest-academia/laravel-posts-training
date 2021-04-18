<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->comment = $request->input('comment', $request->post_id);
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect('/');
    }

    public function edit($comment_id)
    {
        $comment = Comment::findOrFail($comment_id)->first();

        return view('comments.comment_edit', ['comment' => $comment]);
    }

    public function update(Request $request)
    {

        $params = $request->validate([
        'comment' => 'required|max:40',
    ]);
        //$comment = $request->comment;
        //$comment = Comment::findOrFail($comment_id);
        $comment = Comment::where('comment_id', '=', $request->id);
        $comment->comment = $request->input('comment, $request->post_id');
        $comment->user_id = Auth::user()->id;
        $comment->fill($request->all())->save();


        return redirect()->route('comments.comment', ['comment' => $comment]);
    }
    //dd($comment);
    //public function update(Request $request, $post_id)
    //{
    //    $data = $request->validate([
    //        'post_id' => 'required'|'exits:post,id',
    //        'comment' => 'required|max;40',
    //        ]);
    //    $comment = Comment::findOrFail($comment_id);
    //    $comment->fill($data)->save();
    //    return redirect('/', ['comment' => $comment]);

        //$comment = Comment::findOrFail($request->comment_id);
        //$form = $request->all();
        ////unset($form['_token']);
        //$comment->fill($form)->save();
        //return redirect('/');


        //$params = $request->validate([
        //    'post_id' => 'required'|'exits:post,id',
        //    'comment' => 'required|max;40',
        //    ]);
        ////$comment = Comment::findOrFail($params['post_id']);
        //$comment = Comment::findOrFail(['comment' => $request->comment]);
        //$comment->fill($params)->save();
        //return redirect()->route('/', [
        //    $comment->id
        //]);
    //}
}
