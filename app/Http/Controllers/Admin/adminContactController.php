<?php

namespace App\Http\Controllers\Admin;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class adminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mails = contact::select('id', 'mail_name', 'mail_email', 'mail_head', 'mail_body')->get()->toArray();
        return view('admin.contact',['mails' => $mails]);
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
