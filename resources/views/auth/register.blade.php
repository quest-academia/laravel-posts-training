@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="card">
            <div class="form-wrap col-xs-6 col-lg-4">
                <div class="form-group text-center">
                    <h2 class="logo-img mx-auto">
                        新規登録
                    </h2>
                    @include('commons.error_card_list')
                </div>
                {!! Form::open(['signup.post']) !!}
                    @csrf
                    <div class="form-group">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'メールアドレス']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ユーザー名']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'パスワード']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'パスワード']) !!}
                    </div>

                    <div class="actions text-center">
                        {!! Form::submit('新規登録', ['class' => 'btn btn-info w-auto']) !!}
                    </div>
                {!! Form::close() !!}
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
