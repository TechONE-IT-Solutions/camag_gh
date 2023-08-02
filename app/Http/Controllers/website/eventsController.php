<?php

namespace App\Http\Controllers\website;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function events()
    {
        $events = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'AEvents')->get()->toArray();
         return view("website.events",['events'=> $events]);
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
