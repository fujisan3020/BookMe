@extends('layouts.index')

@section('title', '検索レビュー 一覧')

@section('content')
    @foreach($reviews as $review)
      <div class="container reviews">
         <div class="row">
            <a href="#">
            <div class="col-sm-6">
               <img src="" class="w-100" alt="本の画像">
            </div>
            <div class="col-sm-6">
             <h2>{{ $review->book->title }}</h2>
             <p>作者： {{ $review->book->author }}</p>
             <p>ジャンル：{{ $review->book->genre }}</p>
             <p>レビュワー：</p>
            </div>
            </a>
         </div>
      </div>
    @endforeach
      <div class="container reviews">
         <div class="row">
            <a href="#">
            <div class="col-sm-6">
               <img src="" class="w-100" alt="本の画像">
            </div>
            <div class="col-sm-6">
             <h2>Lravel 入門</h2>
             <p>作者：掌田 津耶乃</p>
             <p>レビュワー： 藤川、飯塚</p>
            </div>
            </a>
         </div>
      </div>
      <div class="container reviews">
         <div class="row">
            <a href="#">
            <div class="col-sm-6">
               <img src="" class="w-100" alt="本の画像">
            </div>
            <div class="col-sm-6">
             <h2>Lravel 入門</h2>
             <p>作者：掌田 津耶乃</p>
             <p>レビュワー： 藤川、飯塚</p>
            </div>
            </a>
         </div>
      </div>
      <div class="container reviews">
         <div class="row">
            <a href="#">
            <div class="col-sm-6">
               <img src="" class="w-100" alt="本の画像">
            </div>
            <div class="col-sm-6">
             <h2>Lravel 入門</h2>
             <p>作者：掌田 津耶乃</p>
             <p>レビュワー： 藤川、飯塚</p>
            </div>
            </a>
         </div>
      </div>
      <div class="container reviews">
         <div class="row">
            <a href="#">
            <div class="col-sm-6">
               <img src="" class="w-100" alt="本の画像">
            </div>
            <div class="col-sm-6">
             <h2>Lravel 入門</h2>
             <p>作者：掌田 津耶乃</p>
             <p>レビュワー： 藤川、飯塚</p>
            </div>
            </a>
         </div>
      </div>
@endsection
