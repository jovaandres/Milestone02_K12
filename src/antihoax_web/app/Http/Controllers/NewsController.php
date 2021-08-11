<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
     public function store(Request $request)
    {
        $req = $request->validate([
            'link' => ['required', 'url'],
            'argument' => ['required']
        ]);

        DB::beginTransaction();
        try {
            $news = new News;
            $news->link = $req['link'];
            $news->reason = $req['argument'];
            if ($news->save()) {
                DB::commit();
                return back()->with('success', 'Berhasil Submit');
            } else {
                DB::rollBack();
                return back()->with('failed', 'Internal Server Error');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('failed', $e);
        }
    }

    public function news_list()
    {
        $results = News::all();
        return view('news-list', compact('results'));
    }

    public function cek_news(Request $request)
    {
        $req = $request->validate([
            'link' => ['required', 'url']
        ]);
        $results = News::where('link', 'LIKE', "%{$req['link']}%")->get();
        return view('news-list', compact('results'));
    }
}
