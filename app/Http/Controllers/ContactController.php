<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'birthplace' => 'required|string',
            'birthday' => 'required|date',
            'phone' => 'required|string',
            'company' => 'nullable|string',
            'message' => 'required|string',
            'privacyPolicy' => 'required|accepted'
        ]);

        // Invia l'email
        $data = $request->only(['name', 'email', 'birthplace', 'birthday', 'phone', 'company', 'message']);
        Mail::send('emails.contact', ['data' => $validatedData], function ($message) use ($data) {
            $message->to('your-email@example.com')
                    ->subject('New Contact Message');
        });

        return response()->json(['success' => true]);
    }
}
