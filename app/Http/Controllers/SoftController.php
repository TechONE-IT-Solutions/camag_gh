<?php

namespace App\Http\Controllers;

use App\Models\website\soft;
use Illuminate\Http\Request;

class SoftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.errorpage');
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
    public function show(soft $soft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(soft $soft)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, soft $soft)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(soft $soft)
    {
        //
    }
}
