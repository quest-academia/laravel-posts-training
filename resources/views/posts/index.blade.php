@extends('layouts.app')

@section('content')

<div class="container">
        <div class="container mt-4">
            <a class="btn btn-primary" href="">投稿の新規作成</a>
        </div>
    </div>
    <div class="container my-4">

        @foreach($posts as $post)
        <div class="card mb-4">
            <div class="card-header">
                <h2>Post title</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Post body</p>
                <a class="card-link" href="">詳細をみる</a>
            </div>
            <div class="card-footer">
                <span>投稿日時:2020-1-1</span>
            </div>
            
        @endforeach

    </div>
@endsection
