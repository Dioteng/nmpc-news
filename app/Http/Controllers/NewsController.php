<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Show all news
    public function index() {
        return view('news.index', [
            'news' => News::latest()->filter
            (request(['search']))->paginate(4)
        ]);
    }

    // Show single news
    public function show(News $newsItem) {
        return view('news.show', [
            'newsItem' => $newsItem
        ]);
    }

    // Show create news form
    public function create() {
        return view('news.create');
    }

    // Store news data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
            
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('news-images', 'public');
        }

        $formFields['user_id'] = auth()->id();

        News::create($formFields);

        return redirect('/')->with('message', 'News posted successfully');
    }

    // Show edit news form
    public function edit(News $newsItem) {
        return view('news.edit', [
            'newsItem' => $newsItem
        ]);
    }

    // Update news data
    public function update(Request $request, News $newsItem) {
        $formFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('news-images', 'public');
        }

        $newsItem->update($formFields);

        return redirect('/news/manage')->with('message', 'News updated successfully');
    }

    // Delete news data
    public function delete(News $newsItem) {
        $newsItem->delete ();

        return redirect('/')->with('message', 'News deleted successfully');
    }

    // Manage news data
    public function manage() {
        return view('news.manage', [
            'news' => auth()->user()->news()->paginate(10)]);
    }
}