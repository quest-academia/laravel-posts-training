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
                <i class="fas fa-user-circle fa-3x"></i>
                    <h1 class="col-1">{{ $user->name }}</h1>
                        <div class="col-12">
                            <p>
                            {{ $user->email }}
                            </p>
                        </div>

                        <div class="col-12 mt-3">
                        @if ($user->id == Auth::user()->id)
                            <a class="btn btn-outline-dark common-btn btn-sm edit-profile-btn" href="/users/edit"><i class="fas fa-user-edit"></i>プロフィール編集
                            </a>
                            <a class="btn btn-outline-dark common-btn btn-sm edit-profile-btn" rel="nofollow" data-method="POST" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-cog"></i>ログアウト
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
