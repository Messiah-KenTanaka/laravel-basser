<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
    * バサー一覧画面
    * /
    */
    public function index()
    {
        // ログインユーザー取得
        $user = auth()->user();
        // 記事一覧取得
        $articles = Article::all()->sortByDesc('created_at');

        return view('articles.index',
            [
                'user' => $user,
                'articles' => $articles,
            ]);
    }

    /**
    * 新規記事作成画面
    * /articles/create
    */
    public function create()
    {
        return view('articles.create');
    }

    /** 
    * 新規記事登録処理
    * /articles
    */
    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
    * 記事編集画面
    * /article/{article}/edit
    */
    public function edit(Article $article)
    {
        return view('articles.edit',
        [
            'article' => $article,
        ]);
    }
}
