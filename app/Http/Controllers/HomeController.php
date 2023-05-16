<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::lastLimit(3);
        return view('pages.home', ['articles' => $articles]);
    }
}
