@extends('layouts.app')

@section('content')

<div class="d-flex flex-column align-items-center mt-5">
	<div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
		<div class="card">
			<div class="card-header">
				投稿の新規作成
			</div>
			<div class="card-body">
				{!! Form::open(['route'=>'posts.store','class'=>'upload']) !!}
					<div class="md-form">
						{!! Form::text('title',old('title'),['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('body','本文') !!}
						{!! Form::textarea('body',old('body'),['class'=>'form-control','row'=>'10'])!!}
					</div>
					<div class="text-center">
						{!! Form::submit('投稿する',['class'=>'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
	
@endsection
