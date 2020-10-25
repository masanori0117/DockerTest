@extends('layouts.app')

@section('title', '記事投稿')

@include('layouts.nav')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col-8">
        <p class="text-center mt-3">新規投稿</p>
        <div class="card mt-3 mb-3">
          <div class="card-body pt-0">
            <div class="card-text">
              <form method="POST" action="{{ route('articles.store') }}">
                @csrf
                <div class="md-form">
                  <label>タイトル</label>
                  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
                  <span class="text-danger"><strong>{{ $errors->first('title') }}</strong></span>
                </div>
                <div class="form-group">
                  <label></label>
                  <textarea name="body" required class="form-control" rows="10" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
                  <span class="text-danger"><strong>{{ $errors->first('body') }}</strong></span>
                </div>
                <button type="submit" class="btn blue-gradient btn-block">投稿する</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection