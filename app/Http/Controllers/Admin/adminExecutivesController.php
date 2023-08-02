<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class adminExecutivesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $executives = Admin::select('id','meta_key','text','number', 'textarea', 'image')->where('meta_key', 'AExecutive')->get()->toArray();
        return view('admin.executives',['executives'=>$executives]);
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
        $destinationPath = 'CAMAG/img/';
        $myimage = time() . '.' . $request->executive_pic->getClientOriginalName();
        $request->executive_pic->move(public_path($destinationPath),$myimage);
        //
        $postdata = [
            'meta_key'=>'AExecutive',
            'text'=>$request->input('executive_name'),
            'textarea'=>$request->input('executive_title'),
            'number'=>'',
            'image'=> $destinationPath . '/' . $myimage
        ];
        Admin::create($postdata);
        return redirect('admin/executive')->with(['message' => 'Executive added successfully!!', 'status'=> 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
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
        $executive = Admin::find($id);
        $executive->delete();
        return redirect('admin/executive')->with(['message'=> 'Executive member deleted', 'status' => 'danger' ]);
    }
}
