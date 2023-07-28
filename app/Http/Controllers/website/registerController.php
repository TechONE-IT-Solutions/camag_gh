<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\website\homepage;
use Illuminate\Http\Request;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
         return view("website.register");
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
        $request->validate([
            'email_address'=> 'required|email|unique:registers'
        ]);
        $destinationPath = 'myImages';
        $myimage = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);

        $postData = [
            'name' => $request->input('name'),
            'hometown' => $request->input('hometown'),
            'place_of_birth' => $request->input('place_of_birth'),
            'date_of_birth' => $request->input('date_of_birth'),
            'gender' => $request->input('sex') === 'Single' ? 'Single' : 'Male', // Choose one based on the selected radio
            'electoral_area' => $request->input('electoral_area'),
            'photo' => $destinationPath . '/' . $myimage, // Assuming you are using Laravel's file handling for uploads
            'district' => $request->input('district'),
            'region' => $request->input('region'),
            'nationality' => $request->input('nationality'),
            'residential_address' => $request->input('residential_address'),
            'digital_address' => $request->input('digital_address'),
            'marital_status' => $request->input('ms') === 'Single' ? 'Single' : ($request->input('ms') === 'Married' ? 'Married' : 'Divorced'), // Choose one based on the selected radio
            'telephone_number' => $request->input('telephone_number'),
            'email_address' => $request->input('email_address'),
            'educational_level' => $request->input('edu') === 'None' ? 'None' : ($request->input('edu') === 'J.H.S/M.S.L.C' ? 'J.H.S/M.S.L.C' : ($request->input('edu') === 'S.H.S' ? 'S.H.S' : 'Tertiary')), // Choose one based on the selected radio
            'type_of_membership' => $request->input('pos') === 'AssemblyMember' ? 'AssemblyMember' : ($request->input('pos') === 'UnitCommiteeMember' ? 'UnitCommiteeMember' : 'AssociateMember'), // Choose one based on the selected radio
            'emergency_name' => $request->input('emergency_name'),
            'emergency_relation' => $request->input('emergency_relation'),
            'emergency_contact' => $request->input('emergency_contact'),
            'signature' => $request->input('signature'),
        ];
        homepage::create($postData);
        return redirect('/success')->with(['message' => 'Registration successful!!', 'status'=> 'success']);
    
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
