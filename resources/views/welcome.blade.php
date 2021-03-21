@extends('layouts.app')

@section('content')

    <div class="container pt-4 pb-4">
        <a href="{{ route('create') }}" class="btn btn-primary p-2">投稿の新規作成</a>
    </div>

    @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-header bg-light">
                <h3>{{ $post->title }}</h3>
            </div>
            <div class="card-body">
                <p>{{ $post->body }}</p>
                <a href="{{ action('PostsController@show', $post->id) }}">詳細をみる</a>
            </div>
            <div class="card-footer">
                投稿日時：{{ $post->created_at->format('Y/m/d') }}
            </div>
        </div>
    @endforeach
    {{ $posts->links('pagination::bootstrap-4') }}
@endsection
