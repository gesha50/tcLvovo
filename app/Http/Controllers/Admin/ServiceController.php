<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index')->with([
            'services' => Services::all()->sortDesc(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'service_name' => 'required|max:255',
            'company' => 'required',
            'preview' => 'required',
            'description' => 'required',
            'icon_class' => 'required',
        ]);
        $service = Services::create($validated);
        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.services.show')->with([
            'services' => Services::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.services.edit')->with([
            'services' => Services::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'service_name' => 'required|max:255',
            'company' => 'required',
            'preview' => 'required',
            'description' => 'required',
            'icon_class' => 'required',
        ]);
        $services = Services::find($id);
        $services->update($validated);
        $request->flash();
        flash('Услуга успешно отредактирована')->success()->important();
        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Services::destroy($id);
        flash('Услуга успешно удалена')->warning()->important();
        return redirect(route('admin.services.index'));
    }
}
