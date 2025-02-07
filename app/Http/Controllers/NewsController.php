<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news', compact('news'));
    }

    public function create()
    {
        return view('admin.insert-news');
    }

    /**
     * Store a newly created news entry in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('news_photos', 'public');
        }

        $news = News::create([
            'title' => $request->title,
            'body' => $request->body,
            'photo' => $photoPath
        ]);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }


    /**
     * Show the form for editing the news (if needed for views).
     */
    public function edit(News $news)
    {
        return view('admin.update-news', compact('news'));
    }

    /**
     * Update the specified news in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            if ($news->photo) {
                Storage::disk('public')->delete($news->photo);
            }
            $news->photo = $request->file('photo')->store('news_photos', 'public');
        }

        $news->update([
            'title' => $request->title,
            'body' => $request->body,
            'photo' => $news->photo
        ]);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified news from storage.
     */
    public function destroy(News $news)
    {
        if ($news->photo) {
            Storage::disk('public')->delete($news->photo);
        }

        $news->delete();
        return redirect()->back()->with(['message' => 'News deleted successfully!']);
    }


}
