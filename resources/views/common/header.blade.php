<nav class="navbar navbar-expand navbar-light ">
    <a class="navbar-brand" href=""><i class="fas fa-home fa-2x"></i>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto align-items-center">
            <li>
                <a class="btn btn-info btn-lg " href=""><i class="fas fa-pencil-alt"></i>
                投稿する
                </a>
            </li>
            <li>
                <a class="nav-link far fa-user fa-lg" href="{{ route('users.show',['user' => Auth::user()]) }}">
                </a>
            </li>
        </ul>
    </div>
</nav>
