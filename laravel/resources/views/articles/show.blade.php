@extends('app')

@section('title', 'バサー記事詳細')

@section('content')
  @include('nav')
  <div class="container">
    @include('articles.card')
  </div>
@endsection
