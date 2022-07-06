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

// 記事一覧画面(TOPページ)
Route::get('/', 'ArticleController@index')->name('articles.index');

// よく使われる機能のルーティング
// store, index, create, destroy, update, show, edit
// docker-compose exec workspace php artisan route:list (laradockディレクトリ内で確認)
Route::resource('/articles', 'ArticleController')->except(['index']);