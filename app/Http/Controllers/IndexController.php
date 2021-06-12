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

        return [
            'isUser' => Auth::guard('sanctum')->check(),
            'isAdmin' => Auth::user()->hasRole('admin'),
        ];
    }
}
