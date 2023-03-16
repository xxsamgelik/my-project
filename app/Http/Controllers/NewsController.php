<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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
        dd($article->user);
    }
}
