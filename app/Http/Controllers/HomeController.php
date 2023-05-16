<?php

namespace App\Http\Controllers;

use App\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::lastLimit(6);
        return view('pages.home', ['articles' => $articles]);
    }
}
