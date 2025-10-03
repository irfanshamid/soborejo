<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    function index()
    {
        return view('contact.index');
    }

    public function submit(ContactFormRequest $request)
    {
        // Log the form submission instead of sending email
        Log::info('Contact form submitted', $request->only('name', 'email', 'subject', 'message'));

        return response()->json(['success' => 'Your message has been sent successfully!']);
    }
}
