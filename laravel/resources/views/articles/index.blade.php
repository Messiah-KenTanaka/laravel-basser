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

      @if( Auth::id() === $article->user_id )
        <!-- dropdown -->
        <div class="ml-auto card-text">
          <div class="dropdown">
            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <button type="button" class="btn btn-link text-muted m-0 p-2">
                <i class="fas fa-ellipsis-v"></i>
              </button>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ route("articles.edit", ['article' => $article]) }}">
                <i class="fas fa-pen mr-2"></i>更新する
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                <i class="fas fa-trash-alt mr-2"></i>削除する
              </a>
            </div>
          </div>
        </div>
        <!-- dropdown -->

        <!-- modal -->
        <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header dusty-grass-gradient">
                <i class="font-weight-bold">BASSER</i>
                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                  {{ $article->title }}<br>
                  本当に削除していいですか？
                </div>
                <div class="d-flex justify-content-around">
                  <a class="btn btn-primary" data-dismiss="modal">キャンセル</a>
                  <button type="submit" class="btn btn-danger">削除する</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- modal -->
      @endif

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
