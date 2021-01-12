
@extends('layouts.app')

@include('navbar')

@section('content')

<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト<br/></a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
{{ csrf_field() }}
</form>


@endsection

