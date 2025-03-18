<?php

namespace App\Http\Controllers;

use App\Http\Requests\Contact\UpdateContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
//dd('contact controller');
class ContactController extends Controller
{
    public function show()
    {
//        dd('route is working or not');
        $contacts = Contact::take(1)->get();

        return view('pages.contact', compact('contacts'));
    }

    public function create()
    {
        $contact = Contact::first();
        return view('pages.contacts.create', compact('contact'));
    }

    public function update(UpdateContactRequest $request)
    {
        $contactData = $request->only((new Contact)->getFillable());

        Contact::updateOrCreate(
            ['id' => 1], // Assuming a single contact record
            $contactData
        );

        return redirect('/contact')->with('success', 'Contact updated successfully.');
    }

}
