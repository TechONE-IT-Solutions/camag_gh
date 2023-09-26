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
     public function sms()
     {
        $validatedData = $request->validate([
            'sms' => 'required|string'
        ]);
        $reciepeints = homepage::select('telephone_number')->pluck('telephone_number')->all();
        /*
        $endPoint = 'https://api.mnotify.com/api/sms/quick';
        $apiKey = 'QgmO4mdr0ey27sYELg2nCXIBcD1vD5DumZjrmwSmKrpSU';
        $url = $endPoint . '?key=' . $apiKey;
        $data = [
          'recipient' => ['0544496780', '0596746385'],
          'sender' => 'CAMAG',
          'message' => 'API messaging is fun!',
          'is_schedule' => 'false',
          'schedule_date' => ''
        ];
        $ch = curl_init();
        $headers = array();
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        $result = json_decode($result, TRUE);
        curl_close($ch);
        */
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
