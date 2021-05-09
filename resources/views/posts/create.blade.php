@extends('layouts.app')

@section('content')

<div class="d-flex flex-column align-items-center mt-5">
	<div class="col-xl-7 col-lg-8 col-md-10 col-sm-11 post-card">
		<div class="card">
			<div class="card-header">
				投稿の新規作成
			</div>
			<div class="card-body">
				<form action="" class="upload">
					<div class="md-form">
						<input type="text" class="form-control">
					</div>
					<div class="form-group">
						<textarea class="form-control" name="" id="" rows="10" placeholder="本文"></textarea>
					</div>
					<div class="text-center">
						<input type="text" class="btn btn-primary w-25" value="投稿する">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	
@endsection