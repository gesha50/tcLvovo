<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Informations;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function edit()
    {
        return view('admin.information.edit')->with([
            'information' => Informations::first()
        ]);
    }
    public function update(Request $request, Informations $informations)
    {
        $informations->where('id', 1)->update($request->only('company_name', 'name', 'works_room', 'description'));
        return redirect(route('admin.contact.index'));
    }
}
