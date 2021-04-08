<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::with(['comments'])->orderBy('created_at', 'desc')->get();
        return view('welcome', ['posts' => $posts]);
    }
    //public function comment(Request $request, $post_id)
    //{
    //    $comment = $request->validate([
    //        //'user_id' => 'required',
    //        'post_id' => 'required',
    //        'comment' => 'max|40',
    //    ]);
    //    //    $comment = new Comment(['comment' =>$request->comment]);
    //    //$post = Post::findOrFail($request->post_id);
    //    //$user = User::findOrFail($request->user_id);
    //    //$post->comment()->save($comment);
    //    $comments = $post->comments->sortByDesc('created_at');
    //    //$user = DB::table('users')->findOrFail('id', $user_id)->first();

    //    return redirect()->route('post.index', ['post' => $post]);
    //}

    //public function show()
    //{
    //    $post = Post::findOrFail($post_id);
    //    return view('post.show')
    //}
    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        $post ->delete();
        return redirect('/');
    }
}
