@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="form-wrap col-xs-8 col-lg-4 mx-auto my-5">
                <div class="form-group text-center">
                    <h2 class="logo-img mx-auto">
                    新規登録
                    </h2>
                    @include('layouts.error_card_list')
                </div>
                <form method="POST" action="{{ route('signup.post') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" placeholder="メールアドレス" autocomplete="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <input class="form-control" placeholder="ユーザー名" name="name" value="{{ old('name') }}">
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
                <p class="devise-link py-3 small text-center">
                アカウントを既にお持ちの場合⇨
                    <a href="/login">
                    ログインする
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection

