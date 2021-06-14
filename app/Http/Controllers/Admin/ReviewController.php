<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reviews.index')->with([
            'reviews' => Reviews::all()->sortDesc(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
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
            'name' => 'required|max:255',
            'review' => 'required',
            'worker' => 'sometimes',
        ]);
        Reviews::create($validated);
        $request->flash();
        flash('Отзыв успешно создан')->success()->important();
        return redirect(route('admin.reviews.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reviews  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Reviews $review)
    {
        return view('admin.reviews.show')->with([
            'reviews' => $review,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reviews  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Reviews $review)
    {
        return view('admin.reviews.edit')->with([
            'reviews' => $review,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reviews  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reviews $review)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'review' => 'required',
            'worker' => 'sometimes',
        ]);
        $review->update($validated);
        $request->flash();
        flash('Отзыв успешно отредактирован')->success()->important();
        return redirect(route('admin.reviews.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reviews  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reviews $review)
    {
        $review->delete();
        flash('Отзыв успешно удален')->warning()->important();
        return redirect(route('admin.reviews.index'));
    }
}
