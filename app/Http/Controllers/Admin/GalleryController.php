<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index () {
        $uniqueName = Gallery::all(['nameRU', 'nameForId'])->unique('nameRU');
        return view('admin.gallery.index')->with([
            'gallery' => Gallery::all()->sortDesc(),
            'uniqueName' => $uniqueName,
            'name' => 'all',
        ]);
    }

    public function filter (Request $request) {
        $uniqueName = Gallery::all(['nameRU', 'nameForId'])->unique('nameRU');
        $category = $request->categoryName;
        if ($category == 'all') {
            $gallery = Gallery::all()->sortDesc();
        } else {
            $gallery = Gallery::all()->where('nameForId', $category)->sortDesc();
        }
        return view('admin.gallery.index')->with([
            'gallery' => $gallery,
            'uniqueName' => $uniqueName,
            'name' => $category,
        ]);
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function store (Request $request) {
        foreach($request->allFiles('galleryImgDownload') as $images) {
            foreach($images as $image) {
                $gallery = Gallery::create();
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
