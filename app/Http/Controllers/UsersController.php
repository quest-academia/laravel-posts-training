<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class UsersController extends Controller
{
    public function index()
    {
        $users=User::all();

        $posts=Post::all();
        $date=[
                 'posts' => $posts,
                 'users' => $users,
               ];

       
        return view('post.index', $date);
    }
    // public function index()
    // {
    //     $posts=Post::select('user_id')->get();

    //     $users=User::find($posts); 

    //    $date=[
    //      'posts' => $posts,
    //      'users' => $users,
    //    ];

       
    //     return view('post.index', $date);
    // }
}
