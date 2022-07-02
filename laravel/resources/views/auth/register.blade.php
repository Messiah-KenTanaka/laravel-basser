@extends('app')

@section('title', 'バサー登録')

@section('content')
  <div class="container">
    <div class="row">
      <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <h1 class="text-center"><a class="text-dark" href="/">BASSER</a></h1>
        <div class="card mt-3">
          <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">バサー登録</h2>

            <div class="card-text">
              <form action="POST" action="{{ route('register') }}">
                @csrf
                <div class="md-form">
                  <label for="name">ユーザー名</label>
                  <input class="from-control" type="text" id="name" name="name" required value="{{ old('name') }}"><br>
                  <small>英数字3~16文字(登録後の変更不可)</small>
                </div>
                <div class="md-form">
                  <label for="email">メールアドレス<me-ruadoresu></me-ruadoresu></label>
                  <input class="from-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                </div>
                <div class="md-form">
                  <label for="password">パスワード</label>
                  <input class="from-control" type="text" id="password" name="password" required>
                </div>
                <div class="md-form">
                  <label for="password-confirmation">パスワード(確認)</label>
                  <input class="from-control" type="password" id="confirmation" name="confirmation" required>
                </div>
                <button class="btn btn-block dusty-grass-gradient mt-2 mb-2" type="submit">バサー登録</button>
              </form>
              <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
