<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleApiController extends Controller
{
    public function show(Request $request)
    {
        return new ArticleResource(Article::with('comments', 'tags', 'stats')->find($request->id));
    }

    public function incrementViews(Request $request)
    {
        $article = Article::with('comments', 'tags', 'stats')->find($request->id);
        $article->stats->increment('views');
        return new ArticleResource($article);
    }

    public function incrementLikes(Request $request)
    {
        $article = Article::with('comments', 'tags', 'stats')->find($request->id);
        $request->like_it ? $article->stats->increment('likes') : $article->stats->decrement('likes');
        return new ArticleResource($article);
    }
}
