<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact.index')->with([
            'contact' => Contact::first()
        ]);
    }
    public function edit()
    {
        return view('admin.contact.edit')->with([
            'contact' => Contact::first()
        ]);
    }
    public function update(Request $request, Contact $contact)
    {
        $contact->where('id', 1)->update($request->only('phone', 'email', 'address'));
        return redirect(route('admin.index'));
    }
}
