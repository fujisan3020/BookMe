@extends('layouts.index')

@section('title', 'レビュー 一覧')

@section('content')
    @foreach($reviews as $review)
      <div class="container reviews">
        <div class="row">
            <a href="{{ action('ReviewController@content', ['id' => $review->id])}}">
            <div class="col-sm-6">
               <img src="{{ $review->book->image_path }}" alt="本の画像" width="250" height="350">
            </div>
            <div class="col-sm-6">
             <h2>{{ $review->book->title }}</h2>
             <br>
             <h2><small>作者： {{ $review->book->author }}</small></h2>
             <br>
             <h2><small>ジャンル：{{ $review->book->genre }}</small></h2>
             <br>
             <h2><small>レビュワー：{{ $review->user->name }}</small></h2>
            </div>
            </a>
        </div>
      </div>
    @endforeach
@endsection
