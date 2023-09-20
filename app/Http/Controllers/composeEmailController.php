<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use App\Models\website\homepage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class composeEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.mailAll');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mail_name' => 'required|string|max:255',
            'mail_email' => 'required|email|max:255',
            'mail_head' => 'required',
            'mail_body' => 'required|string',
        ]);
        $reciepeints = homepage::select('email_address')->pluck('email_address')->all();
        Mail::to($reciepeints)->send(new ContactUsEmail($validatedData));
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Message sent to all members of CAMAG'
        ]);
    }

    /**
     * SMS
     */
    public function sms(Request $request)
    {
       // $reciepeints = homepage::select('telephone_number')->pluck('telephone_number')->all();
        $response = Http::post('
            https://apps.mnotify.net/smsapi?key=zN94QZppofKK1Qd7kEIn1WA1Y&to=0544496780&msg=hi&sender_id=Symp
            '
        );

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Message sent to all members of CAMAG'
        ]);
        //https://apps.mnotify.net/smsapi?key=xxxxxxxxxx&to=xxxxxxx&msg=xxxxxxxx&sender_id=xxxxx
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
