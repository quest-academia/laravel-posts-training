<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * ユーザー一覧画面
     *
     * @return $posts
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('post.index', ['posts' => $posts]);
    }

    /**
     * ユーザー新規登録
     *
     * @return $user
     */
    public function create()
    {
        $user = Auth::user();

        return view('post.create', ['user' => $user]);
    }

    /**
     * ユーザー登録保存
     *
     * @return $post　登録内容
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->user_id = auth()->user()->id;
        $post->title=$request->title;
        $post->message=$request->message;
        $post->save();
        
        return redirect('/');
    }
}
