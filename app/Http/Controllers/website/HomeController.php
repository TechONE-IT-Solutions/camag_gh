<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\website\homepage;
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
    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
    public function getassembly(){
        // 
        $assemblymen = homepage::select('id','name', 'gender', 'electoral_area', 'telephone_number', 'email_address','photo')->where('type_of_membership', 'Assembly member')->get()->toArray();
        return view('admin.assemblymember', compact('assemblymen'));
    }
}
