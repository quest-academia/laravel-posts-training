@extends('layouts.app')

@section('content')

<div class="container text-right mt-3 mb-2" style="display: flex; justify-content: flex-end;">
    <a href="{{ route('edit', ['id' => $post]) }}" class="btn btn-primary">編集する</a>
    {!! Form::open(['route' => ['delete', $post->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除する', ['class' => 'btn btn-danger ml-1']) !!}
    {!! Form::close() !!}
</div>

<div class="card">
    <div class="card-header">
        <h1>{{ $post->title }}</h1>
    </div>
    <div class="card-body">
        {{ $post->body }}
    </div>
    <div class="card-footer">
        {{ $post->created_at->format('Y/m/d') }}
    </div>
</div>

<div class="mt-3 mb-2">
    <a class="btn btn-secondary p-2" href="/" style="color: white; text-decoration: none;">topへ</a>
</div>

@endsection
