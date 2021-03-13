<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Validator;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //ログインしていないければログインページに遷移する
    public function __construct()
    {
        $this->middleware('auth');
    }
    //プロフィールページ{ユーザーID}
    public function show($user_id)
    {
        $user = User::where('id', $user_id)->firstOrFail();
        return view('user/show', ['user' => $user]);
    }
    //プロフィール編集ページに遷移する
    public function edit()
    {
        $user = Auth::user();
        return view('user/edit', ['user' => $user]);
    }
    //バリデーション
    public function update(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
    ]);
        //バリデーションエラーになった場合の処理
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect('/users/'.$request->id);
    }
}
