<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function showWelcomePage()
    {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }
}
