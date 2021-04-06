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
