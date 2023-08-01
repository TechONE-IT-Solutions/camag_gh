<?php

namespace App\Http\Controllers\website;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Models\website\homepage;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $h_banner = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hBanner')->get()->toArray();
        
        $number = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hCounter')->get()->toArray();

        $news = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hNews')->get()->toArray();

        $teams = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hTeam')->get()->toArray();
        
         return view("website.index", ['h_banner' => $h_banner, 'number' => $number, 'news' => $news, 'teams'=> $teams]);
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
        
    }
}
