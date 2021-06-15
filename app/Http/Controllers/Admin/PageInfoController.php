<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageInfo;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class PageInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.page_info.index')->with([
            'pageInfo' => PageInfo::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageInfo  $pageInfo
     * @return Application|Factory|View|Response
     */
    public function edit(PageInfo $pageInfo)
    {
        return view('admin.page_info.edit')->with([
            'pageInfo' => $pageInfo,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageInfo  $pageInfo
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, PageInfo $pageInfo)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $pageInfo->update($validated);
        $request->flash();
        flash('Заголоко и описание успешно отредактированы')->success()->important();
        return redirect(route('admin.page_info.index'));
    }

}
