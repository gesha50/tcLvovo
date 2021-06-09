<?php

namespace App\Http\Controllers;

use App\Models\Histories;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index () {
        $sorted = Histories::all()->sortBy('year');
        return $sorted->values()->all();
    }
}
