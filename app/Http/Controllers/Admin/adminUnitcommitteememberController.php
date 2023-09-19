<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\website\homepage;
use App\Http\Controllers\Controller;


class adminUnitcommitteememberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unitcommittee = homepage::select('id','name', 'gender', 'electoral_area', 'telephone_number', 'email_address','photo','membership_id')->where('type_of_membership', 'UnitCommiteeMember')->get()->toArray();
        return view('admin.unitcommittee', ['unitcommittee'=>$unitcommittee]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function delete_assembly($id)
    {
        $associateMember = homepage::find($id);
        $associateMember->delete();
        return redirect('admin/unitcommittee')->with(['message'=> 'Unit Committee Member deleted', 'status'=> 'danger']);
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
