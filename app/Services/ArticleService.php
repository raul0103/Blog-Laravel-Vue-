<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function getArticleById($request)
    {
        return  Article::with('comments', 'tags', 'stats')->find($request->id);
    }
}
