<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('Pages.contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $mailFromAddress = env('MAIL_FROM_ADDRESS');
        $data = $request->all();
        Mail::to($mailFromAddress)->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
