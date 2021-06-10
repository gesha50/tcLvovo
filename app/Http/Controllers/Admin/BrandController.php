<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.brands.index')->with([
            'brands' => Brands::all()->sortDesc(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
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
            'title' => 'required|max:255',
            'link' => 'required',
            'description' => 'required',
        ]);
        $brands = Brands::create($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('brands');
            $brands->image = \Storage::url($path);
            $brands->save();
        }
        $request->flash();
        return redirect(route('admin.brands.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param Brands $brand
     * @return void
     */
    public function show(Brands $brand)
    {
        return view('admin.brands.show')->with([
            'brands' => $brand,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Brands $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brands $brand)
    {
        return view('admin.brands.edit')->with([
            'brands' => $brand,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brands $brand)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required',
            'description' => 'required',
        ]);
        $brand->update($validated);
        $request->flash();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('brands');
            $brand->image = \Storage::url($path);
            $brand->save();
        }
        flash('Бренд успешно отредактирован')->success()->important();
        return redirect(route('admin.brands.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Brands $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brands $brand)
    {
        $brand->delete();
        flash('Бренд успешно удален')->warning()->important();
        return redirect(route('admin.brands.index'));
    }
}
