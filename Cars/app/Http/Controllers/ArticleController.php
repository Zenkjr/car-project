<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('article')->with('articles', $articles);
    }
}
