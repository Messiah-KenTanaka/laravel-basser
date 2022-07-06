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
      <div class="card mt-3">
        <div class="card-body d-flex flex-row">
          <i class="fas fa-user-circle fa-3x mr-1"></i>
          <div>
            <div class="font-weight-bold">
              {{ $article->user->name }}
            </div> 
            <div class="font-weight-lighter">
              {{ $article->created_at->format('Y/m/d H:i') }}
            </div>
          </div>
        </div>
        <div class="card-body pt-0 pb-2">
          <div class="h6 card-title font-weight-bold">
            {{ $article->title }}
          </div>
          <div class="card-text">
            {!! nl2br(e( $article->body )) !!}
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
