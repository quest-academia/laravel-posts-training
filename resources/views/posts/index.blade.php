@extends('layouts.app')

@section('content')

  <div class="container my-4">
    <a class="btn btn-primary" href="">投稿の新規作成</a>
  </div>

  </div>

  <div class="container my-4">

    @foreach($posts as $post)
      <div class="card mb-4">
        <h2 class="card-header">
          {{ $post->title }}
        </h2>
        <div class="card-body">
          <p class="card-text">
            {{ $post->body }}
          </p>
            <a class="card-link" href="">詳細をみる</a>
        </div>
        <div class="card-footer">
          <span>
            投稿日時:{{ $post->created_at->format('Y.m.d') }}
          </span>
        </div>
      </div>
    @endforeach

  <div class="pagination justify-content-end">
    {{ $posts->links('pagination::bootstrap-4') }}
  </div>

@endsection