<?php

namespace App\Http\Controllers\website;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function team()
    {
        $executives = Admin::select('id','meta_key','text','number', 'textarea', 'image')->where('meta_key', 'AExecutive')->get()->toArray();
         return view("website.team", ['executives'=>$executives]);
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
