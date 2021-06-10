<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Informations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function information () {
        return Informations::first();
    }
    public function contact () {
        return Contact::first();
    }
    public function check () {
        if (Auth::guard('sanctum')->check()) {
            return ['success' => true];
        }
        return ['success' => false];
    }
}
