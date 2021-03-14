@extends('layouts.app')

@section('content')

<div class="container text-right mt-3 mb-2">
    <button type="button" class="btn btn-primary p-1">編集する</button>
    <button type="button" class="btn btn-danger p-1">削除する</button>
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
