<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\SubscriptionFormRequest;

class SubscriptionController extends Controller
{
    public function submit(SubscriptionFormRequest $request)
    {
        // Log the form submission instead of sending email
        Log::info('Subscription form submitted', $request->only('email'));
        return response()->json(['success' => 'Signed Up for Newsletter!']);
    }
}
