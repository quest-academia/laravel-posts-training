<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <style>
        .card-wrap{
            margin-top: 40px;
        }
    </style>
</head>
<body>

@include('commons.header')

<div class="d-flex flex-column align-items-center mt-5">
	<div class="col-md-8">
		<div class="card-wrap">
			<div class="card mt-3">
            <div class="card-header">
				<a href="" class="no-text-decoration">
					<i class="fas fa-user-circle fa-2x mr-1"></i>
				</a>
				<a href="" class="black-color">
					<strong>User</strong>
				</a>
			</div>
			<div class="card-body">
				<h3 class="h5 title">
					aaaaa
				</h3>
				<div class="mb-5">
					aaaaaaaaaa
				</div>
				<section>
					<div id="comment-post-56">
						<span class="help-block">

						</span>
						<div class="container mt-4">
							<div class="border-top p-1">
							<span><strong>
								ddd
							</strong></span>
							<div class="comments mt-1">
								<span>dddddd</span>
							</div>
							</div>
						</div>
						<div class="m-4">
							<form method="post" action="" class="w-100">
								<input class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
								<div class="text-right">
									<input type="submit" value="コメント送信" class="far fa-comment btn btn-default btn-sm">
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
            </div>
		</div>
	</div>

	<div class="col-md-8 col-md-2 mx-auto">
		<div class="card-wrap">
            <div class="card mt-3">
            <div class="card-header">
				<a href="" class="no-text-decoration">
					<i class="fas fa-user-circle fa-2x mr-1"></i>
				</a>
				<a href="" class="black-color">
					<strong>User</strong>
				</a>
			</div>
			<div class="card-body">


				<div class="post_edit text-right">
					<a href="" class="btn btn-primary btn-sm">編集する</a>
					<a href="" class="btn btn-danger btn-sm">削除する</a>
				</div>

				<h3 class="h5 title">
					aaaaa
				</h3>
				<div class="mb-5">
					aaaaaaaaaa
				</div>
				<section>
					<div id="comment-post-56">
						<span class="help-block">

						</span>
						<div class="container mt-4">
							<div class="border-top p-1">
							<span><strong>
								ddd
							</strong></span>
							<div class="comments mt-1">
								<span>dddddd</span>
							</div>
							</div>
						</div>
						<div class="m-4">
							<form method="post" action="" class="w-100">
								<input class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
								<div class="text-right">
									<input type="submit" value="コメント送信" class="far fa-comment btn btn-default btn-sm">
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
            </div>
		</div>
	</div>
</div>

@include('commons.footer')

</body>
</html>