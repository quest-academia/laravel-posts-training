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

        if ($request->email == $user->email) {
            // メールアドレスの変更なし
            $user->fill($request->except('email'))->save();
        } else {
            // メールアドレスの変更あり
            $user->fill($request->all())->save();
        }

        return redirect()->route('users.show', ['user' => $user]);
    }
}
