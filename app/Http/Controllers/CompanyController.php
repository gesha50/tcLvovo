<?php

namespace App\Http\Controllers;

use App\Models\Informations;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index () {
        return view('company')->with([
            'information' => Informations::first()
        ]);
    }
}
