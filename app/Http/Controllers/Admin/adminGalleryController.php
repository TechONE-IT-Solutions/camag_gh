<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class adminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Gallery = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'Agallery')->get()->toArray();
        return view('admin.gallery', ['Gallery' => $Gallery]);
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
        $destinationPath = 'CAMAG/img/';
        $myimage = time() . '.' . $request->galleryImage->getClientOriginalName();
        $request->galleryImage->move(public_path($destinationPath),$myimage);
        //
        $postdata = [
            'meta_key'=>'Agallery',
            'text'=>$request->input('galleryText'),
            'textarea'=>'',
            'number'=>'',
            'image'=> $destinationPath . '/' . $myimage
        ];
        Admin::create($postdata);
        return redirect()->back()->with(['message' => 'Picture Inserted Successfully!!', 'status'=> 'success']);
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
    public function destroy($id)
    {
        $picture = Admin::find($id);
        $picture->delete();
        return redirect()->back()->with(['message' => 'Picture deleted', 'status'=> 'danger']);
    }
}
