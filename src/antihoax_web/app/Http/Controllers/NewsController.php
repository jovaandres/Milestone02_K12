<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index() {
        $news = News::all();
        return $news;
    }
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

    public function home()
    {
        return view('home');
    }

    public function lapor()
    {
        return view('lapor');
    }

    public function about()
    {
        return view('about');
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

    public function upvote(Request $request)
    {
        $news = News::where('link', $request->link)->get()->first();
        DB::beginTransaction();
        try {
            $news->upvote++;
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

    public function downvote(Request $request)
    {
        $news = News::where('link', $request->link)->get()->first();
        DB::beginTransaction();
        try {
            $news->downvote++;
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
}
