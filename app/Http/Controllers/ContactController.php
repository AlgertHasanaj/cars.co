<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Save the contact to the database
        Contact::create($details);


        Mail::to('algerthasanaj1@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Thank you for contacting us!');
    }
}
