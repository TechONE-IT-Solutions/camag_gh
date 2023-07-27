<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view("website.index");
        //
    }

    public function about()
    {
         return view("website.about");
        //
    }

    public function team()
    {
         return view("website.team");
        //
    }

    public function contact()
    {
         return view("website.contact");
        //
    }

    public function donate()
    {
         return view("website.donate");
        //
    }

    public function paydues()
    {
         return view("website.paydues");
        //
    }

    public function register()
    {
         return view("website.register");
        //
    }

    public function gallery()
    {
         return view("website.gallery");
        //
    }

    public function events()
    {
         return view("website.events");
        //
    }

    public function success()
    {
         return view("website.success");
        //
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
        $destinationPath = 'myImages';
        $myimage = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);
        
        $postData = [
            'name' => $request->input('name'),
            'hometown' => $request->input('hometown'),
            'place_of_birth' => $request->input('place_of_birth'),
            'date_of_birth' => $request->input('date_of_birth'),
            'sex' => $request->input('male') ?: $request->input('female'), // Choose one based on the selected radio
            'electoral_area' => $request->input('electoral_area'),
            'photo' => $request->file('photo'), // Assuming you are using Laravel's file handling for uploads
            'district' => $request->input('district'),
            'region' => $request->input('region'),
            'nationality' => $request->input('nationality'),
            'residential_address' => $request->input('residential_address'),
            'digital_address' => $request->input('digital_address'),
            'marital_status' => $request->input('single') ?: $request->input('married') ?: $request->input('divorced'), // Choose one based on the selected radio
            'telephone_number' => $request->input('telephone_number'),
            'email' => $request->input('email'),
            'educational_level' => $request->input('None') ?: $request->input('J.H.S/M.S.L.C') ?: $request->input('S.H.S') ?: $request->input('Tertiary'), // Choose one based on the selected radio
            'type_of_membership' => $request->input('assemblymember') ?: $request->input('unitCommiteemember') ?: $request->input('Associate Member'), // Choose one based on the selected radio
            'emergency_name' => $request->input('emergency_name'),
            'emergency_relation' => $request->input('emergency_relation'),
            'emergency_contact' => $request->input('emergency_contact'),
            'name_signature' => $request->input('name_signature'),
        ];
    
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
