@extends('layouts.app')

@include('footer')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-4">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto">
                ログイン
                </h2>
                @include('error_card_list')
            </div>
            <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <input id="email" type="email" class="form-control" name="email"  placeholder="メールアドレス" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="パスワード">
                </div>

                <div class="actions text-center">
                    <input type="submit" name="commit" value="ログインする" class="btn btn-danger w-auto">
                </div>
            </form>

            <br>

            <p class="devise-link">
            アカウントをお持ちでないですか？
                <a href="{{ route('register') }}">
                新規登録する
                </a>
            </p>
        </div>
    </div>
</div>
@endsection
