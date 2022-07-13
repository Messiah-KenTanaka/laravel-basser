<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// ログイン機能
Auth::routes();

// scss読み込みルーティング
Route::get('scss', function () {
    return view('app');
});


// 記事一覧画面(TOPページ)
Route::get('/', 'ArticleController@index')->name('articles.index');

/**
* よく使われる機能のルーティング
* store, index, create, destroy, update, show, edit
* ルーティングの確認 $ docker-compose exec workspace php artisan route:list (laradockディレクトリ内)
*/
Route::resource('/articles', 'ArticleController')->except(['index, show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);

// いいね機能のルーティング
Route::prefix('articles')->name('articles.')->group(function () {
    Route::put('/{article}/like', 'ArticleController@like')->name('like')->middleware('auth');
    Route::delete('/{article}/like', 'ArticleController@unlike')->name('unlike')->middleware('auth');
});