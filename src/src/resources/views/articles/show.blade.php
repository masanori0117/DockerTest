@extends('layouts.app')


@section('title', '記事一覧')

@section('content')
  @include('layouts.nav')
  <div class="container">
    @include('layouts.card')
  </div>
@endsection