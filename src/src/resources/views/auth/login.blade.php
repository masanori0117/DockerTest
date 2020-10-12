@extends('layouts.app')

@section('title', 'ログイン')

@section('content')

@section('content')
  @include('layouts.nav')

  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-4 mb-2">
          <div class="card-body text-center">
            <p class="h4 font-italic text-center mt-2">ログイン</p>

            <div class="card-text">
              <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="md-form">
                  <label for="email">メールアドレス</label>
                  <input class="form-control" type="email" id="email" name="email" required value="{{ old('email') }}">
                  <small>メールアドレスはxxx@xxx.comのような形式で入力してください</small>
                  <p class="text-danger"><strong>{{ $errors->first('email') }}</strong></p>
                </div>
                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input class="form-control" type="password" id="password" name="password" required>
                  <span class="text-danger"><strong>{{ $errors->first('password') }}</strong></span>
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>
              </form>
            </div>
            <div class="card-text pt-2">
              <a href="{{ route('signup') }}" class="card-text">ユーザー登録はこちら</a>
            </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection