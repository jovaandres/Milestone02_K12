<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function news_list()
    {
        $results = News::all();
        return view('news-list', compact('results'));
    }

    public function cek_news(Request $request)
    {
        $results = News::where('link', $request->link)->get();
        return view('news-list', compact('results'));
    }
}
