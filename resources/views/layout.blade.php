<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HacksReview</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<header class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="{{route('top')}}">Hacks Review</a>
		</div>
	</header>

	<main>
		@yield('content')
	</main>

	<footer class="footer bg-dark">
		<div class="container">
			<p class="text-white text-right">(c)aihara-m all rights reserved.</p>
		</div>
	</footer>
</body>
</html>