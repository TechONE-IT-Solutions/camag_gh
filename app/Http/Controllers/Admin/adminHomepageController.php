<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class adminHomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $h_banner = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'hBanner')->get()->toArray();
        return view('admin.homepage', ['h_banner'=>$h_banner]);
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
    public function banner_store(Request $request)
    {
        //
        $destinationPath = 'CAMAG/img/';
        $myimage = time() . '.' . $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);


        $postdata = [
            'meta_key'=>'hBanner',
            'text'=>$request->input('text'),
            'textarea'=>'',
            'number'=>'',
            'image'=>$destinationPath . '/' . $myimage
        ];
        Admin::create($postdata);
        return redirect('admin.homepage')->with(['message' => 'Registration successful!!', 'status'=> 'success']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function h_banner_show(){
        
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
