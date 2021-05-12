<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Informations;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function information () {
        return Informations::first();
    }
    public function contact () {
        return Contact::first();
    }
}
