<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use App\Models\website\homepage;
use Illuminate\Http\Request;
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
