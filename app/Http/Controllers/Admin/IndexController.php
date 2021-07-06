<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index')->with([
            'users' => User::all(),
        ]);
    }

    public function charts()
    {
        return view('admin.charts');
    }
    public function tables()
    {
        return view('admin.tables');
    }
    public function layoutSidenav()
    {
        return view('admin.layoutSidenav');
    }

    public function layoutStatic()
    {
        return view('admin.layoutStatic');
    }
}
