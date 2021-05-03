@extends('layout')

@section('content')
<div class="container mt-4">
		<div class="text-right">
			<a href="" class="btn btn-primary">
				編集する
			</a>
			<a href="" class="btn btn-danger">
				削除する
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
			</div>
			<div class="card-footer">
				<span>
					Post footer
				</span>
			</div>
		</div>
	</div>
@endsection('content')