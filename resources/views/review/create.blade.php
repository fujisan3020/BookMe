@extends('layouts.index')

@section('title', 'レビュー作成')

@section('content')
   <div class="container">
       <p><br></p>
       <h1 class="text-sm-center">レビュー作成</h1>
         <div class="col">
            <form action="{{ action('ReviewController@confirm') }}" method="post">
              @csrf
              <fieldse class="form-group">
                <label for="title">本のタイトル</label>
                <strong class="text-danger">(必須)</strong>
                <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}">
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
                  <option value="ビジネス・経済">ビジネス・経済</option>
                  <option value="社会・政治">社会・政治</option>
                  <option value="投資・金融">投資・金融</option>
                  <option value="自然・環境">自然・環境</option>
                  <option value="地理・歴史">地理・歴史</option>
                  <option value="文化・思想">文化・思想</option>
                  <option value="教育・自己啓発">教育・自己啓発</option>
                  <option value="科学・テクノロジー">科学・テクノロジー</option>
                  <option value="旅行・紀行">旅行・紀行</option>
                  <option value="スポーツ・アウトドア">スポーツ・アウトドア</option>
                  <option value="コミック">コミック</option>
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
                <input type="text" id="author" class="form-control" name="author" value="{{ old('author') }}">
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
                <input type="text" id="publisher" class="form-control" name="publisher" value="{{ old('publisher') }}">
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
                <input type="file" id="image" class="form-control" name="image" value="{{ old('image') }}">
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
                <textarea class="form-control" id="review" name="review" rows="3">{{ old('review') }}</textarea>
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
                <textarea class="form-control" id="practice" name="practice" rows="3">{{ old('practice') }}</textarea>
                @error('practice')
                <div class="error">
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                </div>
                @enderror
              </fieldset>

              <button type="submit" class="btn btn-primary">内容確認</button>
            </form>
         </div>
   </div>







@endsection
