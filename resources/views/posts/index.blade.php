@extends('layout')

@section('content')
	<div class="container mt-4">
		<div>
			<a href="" class="btn btn-primary">
				投稿の新規作成
			</a>
		</div>
	</div>

	<div class="container my-4">
		<div class="card mb-4">
			<div class="card-header">
				<h2>
					Post title
				</h2>
			</div>
			<div class="card-body">
				<p class="card-text">
					Post body
				</p>

				<a href="" class="card-link">詳細を見る</a>
			</div>
			<div class="card-footer">
				<span>
					Post footer
				</span>
			</div>
		</div>

		<div class="card mb-4">
			<div class="card-header">
				<h2>
					Post title
				</h2>
			</div>
			<div class="card-body">
				<p class="card-text">
					Post body
				</p>

				<a href="" class="card-link">詳細を見る</a>
			</div>
			<div class="card-footer">
				<span>
					Post footer
				</span>
			</div>
		</div>

		<div class="card mb-4">
			<div class="card-header">
				<h2>
					Post title
				</h2>
			</div>
			<div class="card-body">
				<p class="card-text">
					Post body
				</p>

				<a href="{{route('posts.show')}}" class="card-link">詳細を見る</a>
			</div>
			<div class="card-footer">
				<span>
					Post footer
				</span>
			</div>
		</div>
	</div>
@endsection('content')