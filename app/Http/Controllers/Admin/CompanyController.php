<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        return view('admin.companies.index')->with([
            'companies' => Companies::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.companies.create');
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
            'name' => 'required|max:255',
            'brand_name' => 'required',
            'type_of_activity' => 'required',
        ]);
        Companies::create($validated);
        return redirect(route('admin.companies.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Companies $company
     * @return Application|Factory|View|Response
     */
    public function show(Companies $company)
    {
        $countServices = \DB::table('companies')
                            ->join('services', 'companies.id', 'company_id')
                            ->where('companies.id', $company->id)->count('companies.id');
        return view('admin.companies.show')->with([
            'companies' => $company,
            'countServices' => $countServices
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Companies $company
     * @return Application|Factory|View|Response
     */
    public function edit(Companies $company)
    {
        return view('admin.companies.edit')->with([
            'companies' => $company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Companies $company
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(Request $request, Companies $company)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'brand_name' => 'required',
            'type_of_activity' => 'required',
        ]);
        $company->update($validated);
        return redirect(route('admin.companies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Companies $company
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Companies $company)
    {
        $company->delete();
        flash('Компания успешно удалена')->warning()->important();
        return redirect(route('admin.companies.index'));
    }
}
