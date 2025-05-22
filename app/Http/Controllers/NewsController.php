<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();

        return view('pages.news', compact('news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('news'));
    }
}
