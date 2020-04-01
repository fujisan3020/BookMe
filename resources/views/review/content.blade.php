@extends('layouts.index')

@section('title', 'レビュー内容確認')

@section('content')
      <p><br></p>
      <h1 class="text-sm-center">レビュー内容</h1>
      <div class="container reviews">
        <fieldse class="form-group">
          <label for="title">本のタイトル</label>
          <div>
            <p class="review-value">{{ $review->book->title }}</p>
          </div>
        </fieldset>
        <fieldse class="form-group">
          <label for="genre">本のジャンル</label>
          <div>
            <p class="review-value">{{ $review->book->genre }}</p>
          </div>
        </fieldset>
        <fieldse class="form-group">
          <label for="author">本の著者</label>
          <div>
            <p class="review-value">{{ $review->book->author }}</p>
          </div>
        </fieldset>
        <fieldse class="form-group">
          <label for="publisher">本の出版社</label>
          <div>
            <p class="review-value">{{ $review->book->publisher }}</p>
          </div>
        </fieldset>
        <fieldse class="form-group">
          <label for="image">本の画像</label>
          <div>
            @if(isset($review->book->image_path))
            <img class="content_image" src="{{ $review->book->image_path }}" alt="本の画像" width="300" height="400">
            @else
            <p>なし</p>
            @endif
          </div>
        </fieldset>
        <fieldse class="form-group">
          <label for="review">レビュー</label>
          <div>
            <p class="review-value">{{ $review->review }}</p>
          </div>
        </fieldset>
        <fieldse class="form-group">
          <label for="practice">実践できること</label>
          <div>
            <p class="review-value">{{ $review->practice }}</p>
          </div>
        </fieldset>
        <fieldse class="form-group">
          <label for="name">レビュワー</label>
          <div>
            <p class="review-value">{{ $review->user->name }}</p>
          </div>
        </fieldset>

          @if ($review->helpfuls->where('user_id', Auth::id())->first() != null)
           <a class="btn btn-primary" href="{{ action('HelpfulController@delete', ['id' => $review->id]) }}" role="button">役に立った 投票済み</a>
          @else
          <a class="btn btn-primary" href="{{ action('HelpfulController@create', ['id' => $review->id]) }}" role="button">役に立った <i class="fas fa-flag"></i></a>
          @endif
          <p>{{ $review->helpfuls->count() }}</p>
      </div>

@endsection
