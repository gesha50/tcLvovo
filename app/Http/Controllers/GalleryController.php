<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index () {
        $all = Gallery::all('img');
        $uniqueName = Gallery::all(['nameRU', 'nameForId'])->unique('nameRU');
        return ['all' => $all, 'uniqueName' => $uniqueName];
    }
    public function category (Request $request) {
        $searchName = $request->get('searchName');
        return Gallery::all()->where('nameForId', $searchName);
    }
}
