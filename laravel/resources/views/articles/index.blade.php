@extends('app')

@section('title', 'バサー一覧')

@section('content')
  @include('nav')
  <div class="container">
    @auth
      <div class="mt-3">
        <i class="fas fa-dragon"></i>
        <i class="h5 font-weight-bold">{{ ' ' . $user->name . ' ' }}</i>ログイン中
      </div>
    @endauth
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
