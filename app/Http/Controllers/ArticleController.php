<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::allPaginate(8);
        return view('pages.article.articles', ['articles' => $articles]);
    }

    public function show($slug)
    {
        $article = Article::findBySlug($slug);
        return view('pages.article.article', ['article' => $article]);
    }

    public function showByTag(Tag $tag)
    {
        $articles = $tag->articles()->allByTagPaginate(10);
        return view('pages.article.articles-by-tag', ['articles' => $articles]);
    }
}
