<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    // Store the contact form data
   public function store(Request $request)
{



$validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    Contact::updateOrCreate(
      [  'email' => $request->email, // condition
      ],
        [
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message,
        ]
    );

    return redirect()->back()->with('success', 'Message saved successfully!');
}


}
