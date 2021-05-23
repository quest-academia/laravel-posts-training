<header>
	<nav class="navbar navbar-expand navbar-light bg-light">
		<a href="/" class="navbar-brand">
			<i class="fas fa-home fa-2x"></i>
		</a>
		<div class="collapse navbar-collapse">
			<ul class="navbar-nav ml-md-auto align-items-center">
				<li><a href="/create" class="btn btn-info">
					<i class="fas fa-pencil-alt"></i>
							投稿する
				</a></li>
				<li>
					
				<a class="nav-link far fa-user fa-lg" href="{{ route('user.show', ['id' => Auth::id()]) }}">
                </a>
				</li>
		
			</ul>
		</div>
	</nav>
</header>
