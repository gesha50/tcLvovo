<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageInfo;
use Illuminate\Http\Request;

class PageInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.page_info.index')->with([
            'pageInfo' => PageInfo::all()->sortDesc(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PageInfo $pageInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PageInfo $pageInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageInfo $pageInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageInfo  $pageInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageInfo $pageInfo)
    {
        //
    }
}
