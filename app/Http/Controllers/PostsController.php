<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * ユーザー一覧画面
     *
     * @return $posts
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('post.index', ['posts' => $posts]);
    }
}
