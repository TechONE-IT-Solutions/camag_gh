<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\website\homepage;
use App\Http\Controllers\Controller;

class adminAssemblymemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assemblymen = homepage::select('id','name', 'gender', 'electoral_area', 'telephone_number', 'email_address','photo')->where('type_of_membership', 'AssemblyMember')->get()->toArray();
        return view('admin.assemblymember', ['assemblymen'=> $assemblymen]);
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
    public function destroy($id)
    {
        $assemblyman = homepage::find($id);
        $assemblyman->delete();
        return redirect('admin.assemblymember')->with(['message'=> 'Assembly Member deleted', 'status'=> 'danger']);
    }
}
