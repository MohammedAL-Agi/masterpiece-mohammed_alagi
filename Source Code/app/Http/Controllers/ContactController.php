<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $contact = new Contact();
        $contacts = $contact->all();
        return view('public.contact', compact('contacts'));
    }

    public function AdminIndex()
    {
        $contact = new Contact();
        $contacts = $contact->all();
        return view('admin.contact', compact('contacts'));
    }

    public function create(Request $request)
    {
        request()->validate([
            'name'     => 'required|min:4',
            'email'    => 'required|email',
            'message'  => 'required'
        ]);

        $contact = new Contact;

        $contact->name    = $request->input('name');
        $contact->email   = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        alert()->success('Thank You', 'Your message has been submitted!');

        return back()->with('success', 'Your message sent successfully.');
    }
}
