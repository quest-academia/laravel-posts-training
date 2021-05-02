<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user,]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',['user' => $user,]);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];
        // dd($data);
        $user = User::findOrFail($id);
        $user->fill($data)->save();
        return redirect('/');
    }
}