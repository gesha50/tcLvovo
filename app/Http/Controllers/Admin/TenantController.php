<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tenants;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.tenants.index')->with([
            'tenants' => Tenants::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.tenants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'icon_class' => 'required',
        ]);
        $tenants = Tenants::create($validated);
        return redirect(route('admin.tenants.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Tenants $tenant
     * @return Response
     */
    public function show(Tenants $tenant)
    {
        return view('admin.tenants.show')->with([
            'tenants' => $tenant,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tenants $tenant
     * @return Application|Factory|View|Response
     */
    public function edit(Tenants $tenant)
    {
        return view('admin.tenants.edit')->with([
            'tenants' => $tenant,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tenants $tenant
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Tenants $tenant)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'icon_class' => 'required',
        ]);
        $tenant->update($validated);
        $request->flash();
        flash('Достоинство в Арендаторах успешно отредактировано')->success()->important();
        return redirect(route('admin.tenants.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tenants $tenant
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Tenants $tenant)
    {
        $tenant->delete();
        flash('Достоинство в Арендаторах успешно удалено')->warning()->important();
        return redirect(route('admin.tenants.index'));
    }
}
