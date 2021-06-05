@extends('layouts.app')
@section('content')
@foreach($posts as $post)
<div class="col-md-8 col-md-2 mx-auto">
</div>
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
							@foreach($post->comments as $comment)
								<div class="border-top p-1">
									<span>{{$comment->user->name}}</span>
									<div class="comments mt-1">
										<span>{{$comment->body}}</span>
									</div>
								</div>
							@endforeach
						</div>
						
						{{-- 以下よりコメント --}}
						
						<div class="m-4"></div>
							 <form class="w-100" action="{{ route('comments.store') }}" method="post">
                                {{ csrf_field() }}
                            <input name="utf8" type="hidden" value=""/>
                            <input value="{{ Auth::id() }}" type="hidden" name="user_id" />
                            <input value="{{ $post->id }}" type="hidden" name="post_id" />
                            <input name="body[{{ $post->id }}]" value= "{{ old('body.'.$post->id) }}" type="text" class="form-control comment-input border-light border mx-auto" placeholder="コメントを入力する">
							<div class="text-right">
								<input type="submit" class="far fa-comment btn btn-default btn-sm" value="コメント送信">
							</div>
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
@endforeach
@endsection
