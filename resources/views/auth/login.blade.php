@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="form-wrap col-xs-6 col-lg-4">
            <div class="form-group text-center">
                <h2 class="logo-img mx-auto">
                ログイン
                </h2>
            </div>
            {!! Form::open(['route' => 'login.post']) !!}
            @csrf
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            
                <div class="actions text-center">
                {!! Form::submit('ログイン', ['class' => 'btn btn btn-primary mt-2']) !!}
                </div>
            {!! Form::close() !!}
                
            <br>
                    
            <p class="devise-link">
            アカウントをお持ちでないですか？
                <a href="{{ route('signup') }}">
                新規登録する
                </a>
            </p>    
        </div>      
    </div>          
</div> 
@endsection