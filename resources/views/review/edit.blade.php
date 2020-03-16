<!-- @extends('layouts.index')

@section('title', 'レビュー編集')

@section('content')
   <div class="container">
       <p><br></p>
       <h1 class="text-sm-center">レビュー作成</h1>
         <div class="col">
            <form action="" method="post" enctype="multipart/form-data">
              @csrf
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
                  <option value="ビジネス・経済" @if( old('genre') == 'ビジネス・経済') selected @endif>ビジネス・経済</option>
                  <option value="社会・政治" @if( old('genre') == '社会・政治') selected @endif>社会・政治</option>
                  <option value="投資・金融" @if( old('genre') == '投資・金融') selected @endif>投資・金融</option>
                  <option value="自然・環境" @if( old('genre') == '自然・環境') selected @endif>自然・環境</option>
                  <option value="地理・歴史" @if( old('genre') == '地理・歴史') selected @endif>地理・歴史</option>
                  <option value="文化・思想" @if( old('genre') == '文化・思想') selected @endif>文化・思想</option>
                  <option value="教育・自己啓発" @if( old('genre') == '教育・自己啓発') selected @endif>教育・自己啓発</option>
                  <option value="科学・テクノロジー" @if( old('genre') == '科学・テクノロジー') selected @endif>科学・テクノロジー</option>
                  <option value="旅行・紀行" @if( old('genre') == '旅行・紀行') selected @endif>旅行・紀行</option>
                  <option value="スポーツ・アウトドア"@if( old('genre') == 'スポーツ・アウトドア') selected @endif>スポーツ・アウトドア</option>
                  <option value="その他" @if( old('genre') == 'その他') selected @endif>その他</option>
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
                <input type="file" id="image" class="form-control" name="image" value="{{ $review->image_path }}">
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
              @endforeach

              <button type="submit" class="btn btn-primary">内容確認</button>
            </form>
         </div>
   </div>
@endsection -->
