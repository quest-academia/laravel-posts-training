@extends('layouts.app')

@include('footer')

@section('content')

<div class="top-page">
    <div class="card devise-card">
        <div class="form-wrap">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto">新規登録</h2>
                @include('error_card_list')
            </div>
            <form method="POST" action="{{ route('register') }}">
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

                <div class="actions">
                    <input type="submit" name="commit" value="新規登録" class="btn btn-info w-100">
                </div>
            </form>
            <br>
                <p class="devise-link">
                アカウントを既にお持ちの場合⇨
                    <a href="/login">ログインする</a>
                </p>
            </div>
        </div>
    </div>
@endsection
