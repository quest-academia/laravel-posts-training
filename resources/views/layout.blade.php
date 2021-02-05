<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hacksレビュー</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
      <header class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('top')}}">Hacksレビュー</a>
        </div>
      </header>

      <main>
          @yield('content')
      <main>


      <footer class="footer bg-dark">
        <div class="container">
            <p class="text-white text-right">@Kyohei-Yamamoto All right reserved</p>
        </div>
      </footer>
  </body>
</html>
