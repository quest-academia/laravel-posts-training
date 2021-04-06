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
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('test', ['posts' => $posts]);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        $post ->delete();
        return redirect('/');
    }
}
