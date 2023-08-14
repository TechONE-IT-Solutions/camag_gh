<?php

namespace App\Http\Controllers;

use App\Models\website\donationsuccess;
use Illuminate\Http\Request;

class DonationsuccessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.donationsuccess');
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
    public function show(donationsuccess $donationsuccess)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(donationsuccess $donationsuccess)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, donationsuccess $donationsuccess)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(donationsuccess $donationsuccess)
    {
        //
    }
}
