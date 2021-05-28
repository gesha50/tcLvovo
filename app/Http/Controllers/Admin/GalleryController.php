<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index () {
        $uniqueName = Gallery::all(['nameRU', 'nameForId'])->unique('nameRU');
        return view('admin.gallery.index')->with([
            'gallery' => Gallery::all(),
            'uniqueName' => $uniqueName,
            'name' => 'all',
        ]);
    }

    public function filter (Request $request) {
        $uniqueName = Gallery::all(['nameRU', 'nameForId'])->unique('nameRU');
        $category = $request->categoryName;
        if ($category == 'all') {
            $gallery = Gallery::all();
        } else {
            $gallery = Gallery::all()->where('nameForId', $category);
        }
        return view('admin.gallery.index')->with([
            'gallery' => $gallery,
            'uniqueName' => $uniqueName,
            'name' => $category,
        ]);
    }
}
