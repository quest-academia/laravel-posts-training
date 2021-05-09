<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UsersController extends Controller
{
    /**
     * ユーザー詳細画面
     *
     * @param App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }
    /**
     * ユーザー一覧画面
     *
     * @return $date
     */
    public function index()
    {
        $users = User::select('id', 'name')->get();

        $posts = Post::all();

        $date = [
            'posts' => $posts,
            'users' => $users,
        ];


        return view('post.index', $date);
    }
}
