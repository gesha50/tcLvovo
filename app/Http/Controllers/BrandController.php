<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        return Brands::all();
    }


}
