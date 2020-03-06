<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style media="screen">
     body {
        background-image: url(https://www.illust-pocket.com/wp-content/uploads/2016/08/1817-500x375.jpg);
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }
     .invalid-feedback {
       font-size: 15px;
     }
    </style>
</head>
<body>
  @guest

  @endguest
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
