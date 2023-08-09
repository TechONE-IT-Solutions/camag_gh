<?php

namespace App\Http\Controllers;

use App\Models\contact;
use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class contactUsController extends Controller
{
    public function send(Request $request){
        // Validate the form data
        $validatedData = $request->validate([
            'mail_name' => 'required|string|max:255',
            'mail_email' => 'required|email|max:255',
            'mail_head' => 'required',
            'mail_body' => 'required|string',
        ]);
        // Process the form data, save it to the database, etc.
        // ...

        // Send the email using the ContactUsEmail Mailable class
        Mail::to('abdulhakim6490@gmail.com')->send(new ContactUsEmail($validatedData));
        contact::create($validatedData);

        // Redirect back with a success message or perform any other actions
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Message sent successfully!'
        ]);
    }
}
