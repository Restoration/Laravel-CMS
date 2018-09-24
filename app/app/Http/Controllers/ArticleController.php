<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Article;

class ArticleController extends Controller
{
    public function index() {
        $articles = DB::table('articles')->paginate(10);
        return view('article.index', ['articles' => $articles]);
    }

    public function create() {
        return view('article.create');
    }

    public function store(Request $request) {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return view('article.complete');
    }

    public function edit(Request $request, $id) {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }

    public function update(Request $request) {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
        return view('article.complete');
    }

    public function confirm(Request $request, $id) {
        $article = Article::find($id);
        return view('article.confirm', ['article' => $article]);
    }

    public function delete(Request $request) {
        Article::destroy($request->id);
        return view('article.complete');
    }
}
