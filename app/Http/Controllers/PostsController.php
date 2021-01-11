<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //トップページを表示
    public function index()
    {
        return view('post/index');
    }
}
