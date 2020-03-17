@extends('layouts.index')

@section('title', '投稿前レビュー内容確認')

@section('content')
  <div class="container">
    <p><br></p>
    <h1 class="text-sm-center">レビュー内容確認</h1>

      <fieldse class="form-group">
        <label for="title">本のタイトル</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['title'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="genre">本のジャンル</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['genre'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="author">本の著者</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['author'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="publisher">本の出版社</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['publisher'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="image">本の画像</label>
        <div>
          @if(isset($data['read_temp_path']))
          <img src="{{ $data['read_temp_path'] }}" alt="本の画像" width="300" height="300">
          @else
          <p>なし</p>
          @endif
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="review">レビュー</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['review'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="practice">実践できること</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['practice'] }}</p>
        </div>
      </fieldset>

      <form action="{{ action('ReviewController@create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="title" value="{{ $form['title'] }}">
        <input type="hidden" name="genre" value="{{ $form['genre'] }}">
        <input type="hidden" name="author" value="{{ $form['author'] }}">
        <input type="hidden" name="publisher" value="{{ $form['publisher'] }}">
        @if(isset($data))
        <input type="hidden" name="data" value="{{ $data['read_temp_path'] }}">
        @endif
        <input type="hidden" name="review" value="{{ $form['review'] }}">
        <input type="hidden" name="practice" value="{{ $form['practice'] }}">

        <input class="btn btn-primary" type="submit" value="投稿">
      </form>
  </div>
@endsection
