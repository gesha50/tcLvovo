<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index () {
        return News::all()->sortDesc();
    }

    public function show(News $news)
    {
        return $news;
    }
    public function lastNews () {
        return News::all()->last();
    }
}
