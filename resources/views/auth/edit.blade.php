@extends('layouts.index')

@section('title', 'マイアカウント')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="container">
        <br>
        <div class="text-sm-center">
          <h2>マイアカウント</h2>
        </div>
        <div>
          <form method="POST" action="">
            @csrf
            <div class="form-group row mt-4">
                <label for="name" class="col-md-3 col-form-label text-md-right">名前</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mt-4">
                <label for="email" class="col-md-3 col-form-label text-md-right">メールアドレス</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mt-4">
                <label for="password" class="col-md-3 col-form-label text-md-right">パスワード</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mt-4">
                <label for="password-confirm" class="col-md-3 col-form-label text-md-right">パスワードの確認</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row my-3">
              <div class="col-md-4 offset-md-3 myaccount-processing-btn">
                <button type="submit"  class="btn btn-success">
                  更新
                </button>

                <a class="btn btn-warning myaccount-delete-btn" href="{{ action('UserController@delete') }}" role="button">削除</a>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
