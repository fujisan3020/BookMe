@extends('layouts.index')

@section('title', 'レビュー編集')

@section('content')
   <div class="container">
       <p><br></p>
       <h1 class="text-sm-center">レビュー確認</h1>
         <div class="col">
            <form action="" method="post" enctype="multipart/form-data">
              @csrf
              @php
                $i = 1
              @endphp

              @foreach($reviews as $review)
                <fieldse class="form-group">
                  <label for="title">本のタイトル</label>
                  <strong class="text-danger">(必須)</strong>
                  <input type="text" id="title" class="form-control" name="title" value="{{ $review->book->title }}">
                  @error('title')
                  <div class="error">
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  </div>
                  @enderror
                </fieldset>
                <fieldset class="form-group">
                  <label for="genre">本のジャンル</label>
                  <strong class="text-danger">(必須)</strong>
                  <select class="form-control" id="genre" name="genre">
                    <option value="">---</option>
                    <option value="ビジネス・経済" @if( $review->book->genre == 'ビジネス・経済') selected @endif>ビジネス・経済</option>
                    <option value="社会・政治" @if( $review->book->genre == '社会・政治') selected @endif>社会・政治</option>
                    <option value="投資・金融" @if( $review->book->genre == '投資・金融') selected @endif>投資・金融</option>
                    <option value="自然・環境" @if( $review->book->genre == '')自然・環境 selected @endif>自然・環境</option>
                    <option value="地理・歴史" @if( $review->book->genre == '地理・歴史') selected @endif>地理・歴史</option>
                    <option value="文化・思想" @if( $review->book->genre =='文化・思想') selected @endif>文化・思想</option>
                    <option value="教育・自己啓発" @if( $review->book->genre == '教育・自己啓発') selected @endif>教育・自己啓発</option>
                    <option value="科学・テクノロジー" @if( $review->book->genre == '科学・テクノロジー') selected @endif>科学・テクノロジー</option>
                    <option value="旅行・紀行" @if( $review->book->genre == '旅行・紀行') selected @endif>旅行・紀行</option>
                    <option value="スポーツ・アウトドア"@if( $review->book->genre == 'スポーツ・アウトドア') selected @endif>スポーツ・アウトドア</option>
                    <option value="その他" @if( $review->book->genre == 'その他') selected @endif>その他</option>
                  </select>
                  @error('genre')
                  <div class="error">
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  </div>
                  @enderror
                </fieldset>
                <fieldse class="form-group">
                  <label for="author">本の著者</label>
                  <strong class="text-danger">(必須)</strong>
                  <input type="text" id="author" class="form-control" name="author" value="{{ $review->book->author }}">
                  @error('author')
                  <div class="error">
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  </div>
                  @enderror
                </fieldset>
                <fieldse class="form-group">
                  <label for="publisher">本の出版社</label>
                  <strong class="text-danger">(必須)</strong>
                  <input type="text" id="publisher" class="form-control" name="publisher" value="{{ $review->book->publisher }}">
                  @error('publisher')
                  <div class="error">
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  </div>
                  @enderror
                </fieldset>
                <fieldse class="form-group">
                  <label for="image">本の画像</label>
                  <div class="form-text">
                     設定中: {{ basename($review->book->image_path) }}
                  </div>
                  <img src="{{ asset($review->book->image_path) }}" alt="本の画像">
                  <br><br>
                  <input type="file" id="image" class="form-control" name="image">
                  @error('image')
                  <div class="error">
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  </div>
                  @enderror
                </fieldset>
                <hr>
                <fieldset class="form-group">
                  <label for="review">レビュー</label>
                  <strong class="text-danger">(必須)</strong>
                  <textarea class="form-control" id="review" name="review" rows="3">{{ $review->review }}</textarea>
                  @error('review')
                  <div class="error">
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  </div>
                  @enderror
                </fieldset>
                <fieldset class="form-group">
                  <label for="practice">実践できること</label>
                  <strong class="text-danger">(必須)</strong>
                  <textarea class="form-control" id="practice" name="practice" rows="3">{{ $review->practice }}</textarea>
                  @error('practice')
                  <div class="error">
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  </div>
                  @enderror
                </fieldset>

                <button type="submit" class="btn btn-primary">レビュー編集</button>
                <br>
                <hr>

                @php
                  $i++
                @endphp

              @endforeach


            </form>
         </div>
   </div>
@endsection
