@extends('layouts.app')

@section('content')


    <div class="container create_form">
        <h4>投稿の編集</h4>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(['route' => ['update', $post->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('title', 'タイトル') !!}
                {!! Form::text('title', old('title') ? old('title'):$post->title, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('body', '本文') !!}
                {!! Form::textarea('body', old('body') ? old('body'):$post->body, ['class' => 'form-control', 'row' => '5']) !!}
            </div>

            {!! link_to_route('top', 'キャンセル', [], ['class' => 'btn btn-secondary']) !!}
            {!! Form::submit('更新する', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
@endsection
