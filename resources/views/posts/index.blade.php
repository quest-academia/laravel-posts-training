@extends('layouts.app')

@section('content')

@foreach($posts as $post)

<div class="col-md-8 col-md-2 mx-auto">
	<div class="card-wrap">
		<div class="card mt-3">
			<div class="card-header align-items-center d-flex">
				<a href="users" class="no-text-decoration">
					<i class="fas fa-user-circle fa-2x mr-1"></i>
				</a>
				<a href="users" class="black-color">
					<strong>{{$post->user->name}}</strong>
				</a>
			</div>
			<div class="card-body">
				<div class="post_edit text-right">
					{!! Form::open(['route' => ['posts.destroy',$post -> id],'method' => 'delete']) !!}
					<a href="{{route('posts.edit',['post_id'=>$post->id])}}" class="btn btn-primary btn-sm">編集する</a>
					{!! Form::submit('削除する',['class' => 'btn btn-danger btn-sm'])!!}
					{!! Form::close() !!}
				</div>
				<h3 class="h5 title">
				{{$post->title}}
				</h3>
				<div class="mb-5">
				{{$post->body}}
				</div>
				<section>
					<div>
						<span class="help-block"></span>
						<div class="container mt-4">
							<div class="border-top p-1">
								<span>USER</span>
								<div class="comments mt-1">
									<span>comment</span>
								</div>
							</div>
						</div>
						<div class="m-4">
							<input type="text" class="form-control comment-input border-light border mx-auto" placeholder="コメントを入力する">
							<div class="text-right">
								<input type="submit" class="far fa-comment btn btn-default btn-sm" value="コメント送信">
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>

@endforeach

@endsection

