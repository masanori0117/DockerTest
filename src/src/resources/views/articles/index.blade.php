@extends('layouts.app')


@section('title', '記事一覧')

@section('content')
@include('layouts.nav')
<div class="container">
  @foreach ($articles as $article)
    @include('layouts.card')
  @endforeach
</div>


@endsection