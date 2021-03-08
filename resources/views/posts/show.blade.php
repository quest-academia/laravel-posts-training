@extends('layouts.app')

@section('content')

  <div class="container">

    <div class="container mt-4">
      <div class="text-right">
        <a class="btn btn-primary" href="posts.edit">編集する</a>
        <a class="btn btn-danger" href="">削除する</a>
      </div>
    </div>

  </div>

  <div class="container my-4">

      <div class="card mb-4">
        <h2 class="card-header">
          {{ $posts->title }}
        </h2>
        <div class="card-body">
          <p class="card-text">
            {{ $posts->body }}
          </p>
        </div>
        <div class="card-footer">
          <span>
            投稿日時:{{ $posts->created_at->format('Y.m.d') }}
          </span>
        </div>
      </div>


@endsection