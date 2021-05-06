<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel掲示板</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- fontawesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <!-- bootsstrap & CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="jumbotron">
        <h1 class="display-4 text-center">Laravel Post <i class="fas fa-mail-bulk"></i></h1>
        　　
    </div>

    <div class="col-md-8 col-md-2 mx-auto">
        <!-- エラー表示箇所 -->
    </div>

    <div class="col-md-8 col-md-2 mx-auto">
        <div class="card-wrap">
            <div class="card mt-3">
                <div class="card-header align-items-center d-flex">
                    <a class="no-text-decoration" href="">
                        <i class="fas fa-user-circle fa-2x mr-1"></i>
                    </a>
                    <a class="black-color" title="" href="">
                        <strong>
                            ユーザ名
                        </strong>
                    </a>
                </div>
                <div class="card-body">
                    <h3 class="h5 title">
                        タイトル
                    </h3>
                    <div class="mb-5">
                        本文
                    </div>
                    <section>
                        <!-- コメント -->
                        <div id="comment-post-1">
                            <!-- コメントをここに挿入 -->
                            <div class="m-4">
                                <form class="w-100" action="" method="post">
                                    {{ csrf_field() }}
                                    <input name="utf8" type="hidden" value="" />
                                    <input value="" type="hidden" name="user_id" />
                                    <input value="" type="hidden" name="post_id" />
                                    <input name="" value="" class="form-control comment-input border border-light mx-auto" placeholder="コメントを入力する">
                                    </input>
                                    <div class="text-right">
                                        <input type="submit" value="&#xf075;コメント送信" class="far fa-comment btn btn-default btn-sm">
                                        </input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</body>

</html>