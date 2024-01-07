<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function fetchAllArticles()
    {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }
}
