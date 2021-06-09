<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index() {
        return Tenants::all();
    }
}
