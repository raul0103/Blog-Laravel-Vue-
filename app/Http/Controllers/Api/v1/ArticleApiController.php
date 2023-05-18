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
}
