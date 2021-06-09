<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Histories;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.histories.index')->with([
            'history' => Histories::all()->sortBy('year'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.histories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:histories,title|max:255',
            'description' => 'required',
            'year' => 'required|numeric|min:1900|max:'.date ( 'Y' ),
        ]);
        $history = Histories::create($validated);
        $request->flash();
        return redirect(route('admin.histories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Histories  $histories
     * @return Response
     */
    public function show(Histories $history)
    {
        return view('admin.histories.show')->with([
            'history' => $history,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Histories  $history
     * @return Application|Factory|View|Response
     */
    public function edit(Histories $history)
    {
        return view('admin.histories.edit')->with([
            'history' => $history,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Histories  $history
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Histories $history)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'year' => 'required|numeric|min:1900|max:'.date ( 'Y' ),
        ]);
        $history->update($validated);
        flash('"Веха" успешно отредактирована')->success()->important();
        return redirect(route('admin.histories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Histories  $history
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Histories $history)
    {
        $history->delete();
        flash('"Веха" успешна удалена')->warning()->important();
        return redirect(route('admin.histories.index'));
    }
}
