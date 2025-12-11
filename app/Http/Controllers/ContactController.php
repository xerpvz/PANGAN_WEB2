<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate form inputs
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Send email to your Gmail
        Mail::to('rheapangan290@gmail.com')->send(new ContactMail($data));

        // Redirect back with success
        return back()->with('success', 'Message sent successfully!');
    }
}
