<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\Services;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.services.index')->with([
            'services' => Services::query()->with('companies')->get()->sortDesc(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $validatedCompany = $request->validate([
            'name' => 'required',
        ]);
        $company = Companies::create($validatedCompany);
        $validated = $request->validate([
            'service_name' => 'required|max:255',
            'preview' => 'required',
            'description' => 'required',
            'icon_class' => 'required',
        ]);
        $service = Services::create($validated);
        $service->companies_id = $company->id;
        $service->save();
        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Services $service
     * @return Application|Factory|View|Response
     */
    public function show(Services $service)
    {
        return view('admin.services.show')->with([
            'services' => $service,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Services $service
     * @return Application|Factory|View|Response
     */
    public function edit(Services $service)
    {
        return view('admin.services.edit')->with([
            'services' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Services $service
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Services $service)
    {
        $validatedCompany = $request->validate([
            'name' => 'required',
        ]);
        (new \App\Models\Companies)->update($validatedCompany);
        $validated = $request->validate([
            'service_name' => 'required|max:255',
            'preview' => 'required',
            'description' => 'required',
            'icon_class' => 'required',
        ]);
        $service->update($validated);
        $request->flash();
        flash('Услуга успешно отредактирована')->success()->important();
        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Services $service
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Services $service)
    {
        $service->delete();
        flash('Услуга успешно удалена')->warning()->important();
        return redirect(route('admin.services.index'));
    }
}
