<?php

namespace App\Http\Controllers;

use App\Models\Feedbacks;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function sendContactData (Request $request) {
        $validated = $request->validate([
            'name' => 'max:255',
            'email' => '',
            'phone' => 'required',
            'theme' => '',
            'message' => 'required'
        ]);
        return Feedbacks::create($validated);

    }
}
