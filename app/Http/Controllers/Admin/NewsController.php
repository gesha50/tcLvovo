<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index')->with([
            'news' => News::all()->sortDesc(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:news,title|max:255',
            'full_title' => 'required',
            'preview' => 'required',
            'description' => 'required',
        ]);
        $news = News::create($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news');
            $news->image = \Storage::url($path);
            $news->save();
        }
        $request->flash();
        return redirect(route('admin.news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return News
     */
    public function show(News $news)
    {
        return view('admin.news.show')->with([
            'news' => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit')->with([
            'news' => $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'full_title' => 'required',
            'preview' => 'required',
            'description' => 'required',
        ]);
        $news->update($validated);
        $request->flash();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('news');
            $news->image = \Storage::url($path);
            $news->save();
        }
        flash('Новость успешно отредактирована')->success()->important();
        return redirect(route('admin.news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        flash('Новость успешно удалена')->warning()->important();
        return redirect(route('admin.news.index'));
    }
}
