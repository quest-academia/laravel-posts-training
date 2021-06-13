@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-4 mx-auto">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto mt-5">
                新規登録
                </h2>
            </div>

            <form method="POST" action="{{ route('signup.post') }}">
            @csrf
                <div class="form-group">
                    <input class="form-control" placeholder="メールアドレス" autocomplete="email" name="email" value="">
                </div>

                <div class="form-group">
                    <input class="form-control" placeholder="ユーザー名" name="name" value="">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" placeholder="パスワード" autocomplete="off" name="password">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" placeholder="パスワード再確認" autocomplete="off" name="password_confirmation">
                </div>

                <div class="actions text-center">
                    <input type="submit" name="commit" value="新規登録" class="btn btn-info w-auto">
                </div>
            </form>

            <br>
                <p class="devise-link">
                アカウントを既にお持ちの場合⇨
                    <a href="/login">
                    ログインする
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
