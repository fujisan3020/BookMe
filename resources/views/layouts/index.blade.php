</html><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <mata name="csrf-token" content="{{ csrf_token() }}">

    <style>
    a {
      text-decoration: none;
    }
    .nav-pills {
      margin-top: 30px;
    }
    .reviews {
      margin-top: 50px;
      border-radius: 5px;
      border: solid thin silver;
    }
    .error {
      margin-top: 5px;
      margin-bottom: 15px;
      color: red;
    }
    .review-value {
      background-color: #F2F2F2;
      border: 1px silver solid;
      border-radius: 5px;
      padding: 3px 5px;
    }
    </style>


    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  </head>
  <body>
    <header>

       <div class="container">
           <div class="btn-group col-sm-offset-11">
             <ul class="nav">
               <li class="nav-item">
                 <a href="{{ action('ReviewController@index') }}" class="nav-link btn btn-danger">レビュー 一覧</a>
               </li>
               <li class="nav-item">
                 <a href="{{ action('ReviewController@add') }}" class="nav-link btn btn-warning">レビュー 作成</a>
               </li>
             </ul>
            <button type="button" class="btn btn-secondary dropdown-toggle bg-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              マイページ
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">レビュー確認</a>
              <a class="dropdown-item" href="#">アカウント確認</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">ログアウト</a>
            </div>
          </div>
       </div>

       <div class="logo text-sm-center">
          <h1><a class="display-4 " href="{{ action('ReviewController@index') }}">
            <small><small><small>あなたの気づきを価値あるものに。</small></small></small><br>
            <big><big>BookMe</big></big></a></h1>
       </div>

       <ul class="nav nav-pills">
         <li class="nav-item">
           <a href="#" class="nav-link btn-danger">ビジネス・経済</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-warning">社会・政治</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-primary">投資・金融</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-success">自然・環境</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-info">歴史・地理</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-primary">文化・思想</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-danger">教育・自己啓発</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-warning">テクノロジー</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-primary">旅行・紀行</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-success">スポーツ・アウトドア</a>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link btn-info">コミック</a>
         </li>
       </ul>


    </header>

    <main>
      @yield('content')




    </main>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
