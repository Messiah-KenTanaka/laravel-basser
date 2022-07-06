<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

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

    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request, Article $article)
    {
        $article->fill($request->all());
        $article->user_id = $request->user()->id;
        $article->save();

        return redirect()->route('articles.index');
    }
}
