<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\website\homepage;
use App\Http\Controllers\Controller;


class adminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id, $membershipId)
    {
        $details = homepage::select('name', 'hometown', 'place_of_birth', 'date_of_birth', 'gender', 'electoral_area', 'district', 'region', 'nationality', 'residential_address', 'digital_address', 'marital_status', 'telephone_number', 'email_address', 'educational_level', 'type_of_membership', 'emergency_name', 'emergency_contact', 'emergency_relation', 'signature',  'photo', 'membership_id', 'created_at')->where('id',$id)->get()->map(function ($item){
            $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d');
            return $item;
        })->toArray();

        $payment_details = Payment::select('name','amount','created_at')->where('memberId',$membershipId)->get()->map(function ($item){
            $item['created_at'] = Carbon::parse($item['created_at'])->format('Y-m-d');
            return $item;
        })->toArray();
        // dd($details);
        return view('admin.profile',['details'=>$details, 'payment_details'=>$payment_details]);
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
        //
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
