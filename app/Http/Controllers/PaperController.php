<?php

namespace App\Http\Controllers;

use App\Models\website\paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.notsuccess');
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
    public function show(paper $paper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(paper $paper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, paper $paper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(paper $paper)
    {
        //
    }
}
