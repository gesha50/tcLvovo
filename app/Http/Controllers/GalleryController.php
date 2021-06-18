<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index () {
        $all = Gallery::all('img')->sortDesc();
        $uniqueName = \DB::table('galleries')
                        ->join('companies', 'galleries.company_id', 'companies.id')
                        ->select('name')
                        ->distinct()
                        ->get();
        return ['all' => $all, 'uniqueName' => $uniqueName];
    }
    public function category (Request $request) {
        $searchName = $request->get('searchName');
        if ($searchName == 'all'){
            return Gallery::all('img')->sortDesc();
        }
        return Gallery::query()
            ->whereHas('companies', function ($query) use ($searchName) {
                $query->where('name', $searchName);
            })->get();
    }
}
