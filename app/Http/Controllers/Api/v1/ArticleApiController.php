<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use Illuminate\Http\Request;

use App\Services\ArticleService;

class ArticleApiController extends Controller
{

    protected $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    public function show(Request $request)
    {
        $article = $this->service->getArticleById($request);
        return new ArticleResource($article);
    }

    public function incrementViews(Request $request)
    {
        $article = $this->service->getArticleById($request);
        $article->stats->increment('views');
        return new ArticleResource($article);
    }

    public function incrementLikes(Request $request)
    {
        $article = $this->service->getArticleById($request);
        $request->like_it ? $article->stats->increment('likes') : $article->stats->decrement('likes');
        return new ArticleResource($article);
    }
}
