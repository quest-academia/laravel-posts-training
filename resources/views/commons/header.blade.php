<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="/"><i class="fas fa-home fa-2x"></i>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto align-items-center">
            <li>
                {!! link_to_route('投稿新規作成画面のviewを指定','投稿する',['id'=>Auth::id()],['class'=>'btn btn-info']) !!}<i class="fas fa-pencil-alt"></i>
                <!-- link_to_routeを使用する前のコード -->
                <!--<a class="btn btn-info" href="/posts/new"><i class="fas fa-pencil-alt"></i>投稿する</a>-->    
            </li>
            
            <!-- users.show:ユーザー詳細ページ-->
            <li>{!! link_to_route('users.show','',['id'=>Auth::id()],['class'=>'nav-link far fa-user fa-lg']) !!}
            <i class = "far fa-user fa-lg"></i>
                <!--<a class="nav-link" href="/"><i class = "far fa-user fa-lg"></i></a>-->
            </li>
        </ul>
    </div>
</nav>


<ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">新規ユーザ登録</a></li>
                <li class="nav-item"><a href="" class="nav-link">ログイン</a></li>
            </ul>