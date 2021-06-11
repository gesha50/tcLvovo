<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Builder[]|Collection|Response
     */
    public function index()
    {
        return Services::query()->with('companies')->get()->sortDesc();
    }

    /**
     * Display the specified resource.
     *
     * @param Services $services
     * @return Services
     */
    public function show(Services $services)
    {
        return $services;
    }
}
