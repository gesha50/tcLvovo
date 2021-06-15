<?php

namespace App\Http\Controllers;

use App\Models\PageInfo;
use Illuminate\Http\Request;

class PageInfoController extends Controller
{
    public function getTitleAndDescription ($page) {
        return PageInfo::all()->where('page', $page)->first();
    }
}
