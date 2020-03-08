@extends('layouts.index')

@section('title', '投稿前レビュー内容確認')

@section('content')
  <div class="container">
    <p><br></p>
    <h1 class="text-sm-center">レビュー内容確認</h1>
    <form action="{{ action('ReviewController@create') }}" method="post">
      @csrf
      <input type="hidden" name="title" value="{{ $form['title'] }}">
      <input type="hidden" name="genre" value="{{ $form['genre'] }}">
      <input type="hidden" name="author" value="{{ $form['author'] }}">
      <input type="hidden" name="publisher" value="{{ $form['publisher'] }}">
      <input type="hidden" name="image" value="{{ $form['image'] }}">
      <input type="hidden" name="review" value="{{ $form['review'] }}">
      <input type="hidden" name="practice" value="{{ $form['practice'] }}">

      <fieldse class="form-group">
        <label for="title">本のタイトル</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['title'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="title">本のジャンル</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['genre'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="title">本の著者</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['author'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="title">本の出版社</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['publisher'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="title">本の画像</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          @if(isset($form['image']))
          <p class="review-value">{{ $form['image'] }}</p>
          @else
          <p>なし</p>
          @endif
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="title">レビュー</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['review'] }}</p>
        </div>
      </fieldset>
      <fieldse class="form-group">
        <label for="title">実践できること</label>
        <strong class="text-danger">(必須)</strong>
        <div>
          <p class="review-value">{{ $form['practice'] }}</p>
        </div>
      </fieldset>
      <input class="btn btn-primary" type="submit" value="投稿">
    </form>
  </div>
@endsection
