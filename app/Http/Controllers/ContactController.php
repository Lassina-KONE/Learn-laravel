<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
 
    public function store(ContactRequest $request)
    {
        // Mail::to('administrateur@chezmoi.com')
        //     ->queue(new Contact($request->except('_token')));

        // $contact = new \App\Models\Contact;
        // $contact->nom = $request->nom;
        // $contact->email = $request->email;
        // $contact->message = $request->message;
        // $contact->save();

        \App\Models\Contact::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message,
        ]);
 
        return view('confirm');
    }
}
