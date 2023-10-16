<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Show all news
    public function index() {
        return view('news.index', [
            'news' => News::all()
        ]);
    }

    // Show single news
    public function show(News $newsItem) {
        return view('news.show', [
            'newsItem' => $newsItem
        ]);
    }
}
