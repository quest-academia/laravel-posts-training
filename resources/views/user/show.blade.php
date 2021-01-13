@extends('layouts.app')
@include('navbar')
@include('footer')

@section('content')
<div class="profile-wrap">
  <div class="row">
    <div class="col-md-4 text-center">
    </div>
    <div class="col-md-8">
      <div class="row">
        <h1>{{ $user->name }}</h1>

        @if ($user->id == Auth::user()->id)
          <a class="btn btn-outline-dark common-btn edit-profile-btn" href="/users/edit"><i class="fas fa-user-edit"></i>プロフィールを編集する</a>
          <a class="btn btn-outline-dark common-btn edit-profile-btn" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-cog"></i>ログアウト</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        @endif

      </div>
      <div class="row">
        <p>
          {{ $user->email }}

        </p>
      </div>
    </div>
  </div>
</div>
@endsection