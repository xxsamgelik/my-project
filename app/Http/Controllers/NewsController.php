<?php

namespace App\Http\Controllers;
use App\Models\News;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::all();
        return view("news", ['news' => $news]);
    }
    public function article(News $article)
    {
//        return view("news", ['news' => $article]);
    }
}
