<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;

class webadminController
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('admin.index');
        //
    }

    public function unitcommittee()
    {
        return view('admin.unitcommittee');
        //
    }
    public function assemblymember()
    {
        return view('admin.assemblymember');
        //
    }
    public function donate()
    {
        return view('admin.donate');
        //
    }
    public function paydues()
    {
        return view('admin.paydues');
        //
    }
    public function profile()
    {
        return view('admin.profile');
        //
    }
    public function login()
    {
        return view('auth.login');
        //
    }
    public function contact()
    {
        return view('admin.contact');
        //
    }
    public function gallery()
    {
        return view('admin.gallery');
        //
    }
    public function homepage()
    {
        return view('admin.homepage');
        //
    }
    public function about()
    {
        return view('admin.about');
        //
    }
    public function events()
    {
        return view('admin.events');
        //
    }
    public function payment()
    {
        return view('admin.payment');
        //
    }
    public function executive()
    {
        return view('Admin.executives');
        //
    }
    public function charts()
    {
        return view('admin.charts');
        //
    }
    public function associatemember()
    {
        return view('admin.associatemember');
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
