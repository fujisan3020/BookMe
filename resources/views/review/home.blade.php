@extends('layouts.index')

@section('title', 'レビュー 一覧')

</style>
@section('content')
  <div class="container">
    <div class="row">
      @foreach($reviews as $review)
        <a class="col-lg-6 col-sm" href="{{ action('ReviewController@content', ['id' => $review->id]) }}" style="max-height: 400px;">
          <div class="row reviews">
            <div class="col-lg-6 col-sm-6">
              @if (isset($review->book->image_path))
              <img src="{{ $review->book->image_path }}" alt="本の画像" width="250" height="350">
              @else
              <p>画像なし</p>
              @endif
            </div>
            <div class="col-lg-6 col-sm-6">
              <h2>{{ $review->book->title }}</h2>
              <br>
              <h2><small><small>作者： {{ $review->book->author }}</small></small></h2>
              <br>
              <h2><small><small>ジャンル：{{ $review->book->genre }}</small></small></h2>
              <br>
              <h2><small><small>レビュワー：{{ $review->user->name }}</small></small></h2>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
  <p class="pagination">{{ $reviews->links() }}</p>
@endsection
