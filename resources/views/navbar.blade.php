@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand">Laravel Post</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-md-auto align-items-center">
            <li>
              <a class="btn btn-primary" href="/posts/new">投稿する</a>
            </li>
            <li>
              <a class="nav-link far fa-user fa-lg" href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
@endsection

