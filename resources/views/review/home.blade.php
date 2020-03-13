@extends('layouts.index')

@section('title', 'レビュー 一覧')

@section('content')
    @foreach($reviews as $review)
      <div class="container reviews">
         <div class="row">
            <a href="{{ action('ReviewController@content', ['id' => $review->id])}}">
            <div class="col-sm-6">
               <img src="" class="w-100" alt="本の画像">
            </div>
            <div class="col-sm-6">
             <h2>{{ $review->book->title }}</h2>
             <p>作者： {{ $review->book->author }}</p>
             <p>ジャンル：{{ $review->book->genre }}</p>
             <p>レビュワー：{{ $review->user->name }}</p>
            </div>
            </a>
         </div>
      </div>
    @endforeach
@endsection
