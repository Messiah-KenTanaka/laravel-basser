@extends('app')

@section('title', 'バサー一覧')

@section('content')
  @include('nav')
  <div class="container">
    @auth
      <div class="mt-3">
        ようこそ<i class="h5 font-weight-bold">{{ ' ' . $user->name . ' ' }}</i>さん
        <i class="fa-solid fa-face-laugh-squint"></i>
      </div>
    @endauth
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
