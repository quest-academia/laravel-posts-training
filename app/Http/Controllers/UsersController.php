<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use App\User;

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
     * ユーザー更新画面
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('users.edit');
    }

    /**
     * ユーザー更新処理
     *
     * @param App\Http\Requests\UserUpdateRequest $request
     * @param App\User $user
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $user = User::find($request->id);

        $user['name'] = $request->name;

        // 更新メールアドレスが異なる場合
        if ($request->email != $user->email) {
            $user['email'] = $request->email;
        }

        $user->save();

        return redirect()->route('users.show', ['user' => $user]);
    }
}
