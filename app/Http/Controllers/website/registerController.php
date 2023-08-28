<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Payment;
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

        if($request->input('intiMemId')){
            $membershipId = $request->input('intiMemId');
            $Member = homepage::where('membership_id', $membershipId)->get()->first();


            $destinationPath = 'images/members/';
            $myimage = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);

            $transactionReference = $request->input('transaction_reference');
            $email = $request->input('email_address');

            $rnum = random_int(10000, 99999);

            switch ($request->input('pos')) {
                case ('AssemblyMember'):
                    $membershipid = 'ASM-' . $rnum;
                    if (homepage::where('membership_id', '=', $membershipid)->exists()) {
                        //Membership_ID exist
                        $membershipid = 'ASM-' . random_int(10000, 99999);
                    } else {
                        //Membership_ID doesn't exist
                    }
                    break;
                case ('UnitCommiteeMember'):
                    $membershipid = 'UCM-' . $rnum;
                    if (homepage::where('membership_id', '=', $membershipid)->exists()) {
                        //Membership_ID exist
                        $membershipid = 'UCM-' . random_int(10000, 99999);
                    } else {
                        //Membership_ID doesn't exist
                    }
                    break;
                case ('AssociateMember'):
                    $membershipid = 'ASS-' . $rnum;
                    if (homepage::where('membership_id', '=', $membershipid)->exists()) {
                        //Membership_ID exist
                        $membershipid = 'ASS-' . random_int(10000, 99999);
                    } else {
                        //Membership_ID doesn't exist
                    }
                    break;
            }


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
                'membership_id' => $membershipid,
                'paid'=>"1"
            ];
            $members = Payment::where('transaction_reference', $transactionReference)->first();
            $Member->update($postData);
            return redirect('/success')->with([
                'message' => 'Registration successful!!',
                'status' => 'success',
                'members' => $members,
                'membershipid' => $membershipid,
                'email' => $email
            ]);


        }
        else{
                $request->validate([
                'email_address' => 'required|email|unique:registers'
            ]);
            $destinationPath = 'images/members/';
            $myimage = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);

            $transactionReference = $request->input('transaction_reference');
            $email = $request->input('email_address');

            $rnum = random_int(10000, 99999);

            switch ($request->input('pos')) {
                case ('AssemblyMember'):
                    $membershipid = 'ASM-' . $rnum;
                    if (homepage::where('membership_id', '=', $membershipid)->exists()) {
                        //Membership_ID exist
                        $membershipid = 'ASM-' . random_int(10000, 99999);
                    } else {
                        //Membership_ID doesn't exist
                    }
                    break;
                case ('UnitCommiteeMember'):
                    $membershipid = 'UCM-' . $rnum;
                    if (homepage::where('membership_id', '=', $membershipid)->exists()) {
                        //Membership_ID exist
                        $membershipid = 'UCM-' . random_int(10000, 99999);
                    } else {
                        //Membership_ID doesn't exist
                    }
                    break;
                case ('AssociateMember'):
                    $membershipid = 'ASS-' . $rnum;
                    if (homepage::where('membership_id', '=', $membershipid)->exists()) {
                        //Membership_ID exist
                        $membershipid = 'ASS-' . random_int(10000, 99999);
                    } else {
                        //Membership_ID doesn't exist
                    }
                    break;
            }


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
                'membership_id' => $membershipid,
                'paid'=>"1"
            ];
            $members = Payment::where('transaction_reference', $transactionReference)->first();
            homepage::create($postData);
            return redirect('/success')->with([
                'message' => 'Registration successful!!',
                'status' => 'success',
                'members' => $members,
                'membershipid' => $membershipid,
                'email' => $email
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {;
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
