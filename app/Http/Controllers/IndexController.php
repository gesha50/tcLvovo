<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index () {
        return view('welcome')->with([
            'contact' => Contact::first()
        ]);
    }
}
