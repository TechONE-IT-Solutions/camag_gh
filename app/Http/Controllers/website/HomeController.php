<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
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

    public function about()
    {
         return view("website.about");
        //
    }

    public function team()
    {
         return view("website.team");
        //
    }

    public function contact()
    {
         return view("website.contact");
        //
    }

    public function donate()
    {
         return view("website.donate");
        //
    }

    public function paydues()
    {
         return view("website.paydues");
        //
    }

    public function register()
    {
         return view("website.register");
        //
    }

    public function gallery()
    {
         return view("website.gallery");
        //
    }

    public function events()
    {
         return view("website.events");
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
