<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\Gallery;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index () {
        $uniqueName = Companies::all('name')->unique('name');
        $gallery = \DB::table('galleries')
            ->join('companies', 'company_id', '=', 'companies.id')
            ->select()
            ->orderBy('companies.id', 'desc')
            ->get();
        return view('admin.gallery.index')->with([
            'gallery' => $gallery,
            'uniqueName' => $uniqueName,
            'name' => 'all',
        ]);
    }

    public function filter (Request $request) {
        $uniqueName = Companies::all('name')->unique('name');
        $category = $request->categoryName;
        if ($category == 'all') {
            $gallery = \DB::table('galleries')
                ->join('companies', 'company_id', '=', 'companies.id')
                ->select()
                ->orderBy('companies.id', 'desc')
                ->get();
        } else {
            $gallery = Gallery::query()
                ->whereHas('companies', function ($query) use ($category) {
                    $query->where('name', $category);
            })->get();
        }
        return view('admin.gallery.index')->with([
            'gallery' => $gallery,
            'uniqueName' => $uniqueName,
            'name' => $category,
        ]);
    }

    public function create (Request $request) {
        if ($request->get('companyCurrentName')) {
            $uniqueName = $request->get('companyCurrentName');
        } else {
            $uniqueName = Companies::all('name')->unique('name');
        }
        return view('admin.gallery.create')->with([
            'uniqueName' => $uniqueName,
            'name' => 'all',
        ]);
    }

    /**
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store (Request $request) {
        $validatedCompany = $request->validate([
            'name' => 'required',
        ]);
        $company = Companies::all()->where('name', $validatedCompany['name'])->first();
        foreach($request->allFiles('galleryImgDownload') as $images) {
            foreach($images as $image) {
                $gallery = Gallery::create([
                    'company_id' => $company->id
                ]);
                $path = $image->store('gallery');
                $gallery->img = \Storage::url($path);
                $gallery->save();
                $gallery->refresh();
            }
        }
        return redirect(route('admin.gallery.index'));
    }

    public function destroy (Gallery $gallery, $id) {
        $gallery->destroy($id);
        return redirect(route('admin.gallery.index'));
    }

}
