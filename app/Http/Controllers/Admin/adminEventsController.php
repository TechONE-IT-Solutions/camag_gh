<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Admin::select('id','meta_key', 'text', 'textarea', 'number', 'image')->where('meta_key', 'AEvents')->get()->toArray();
        return view('admin.events', ['events'=> $events]);
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
        $myimage = time() . '.' . $request->eventImage->getClientOriginalName();
        $request->eventImage->move(public_path($destinationPath),$myimage);

        $postdata = [
            'meta_key'=>'AEvents',
            'text'=>$request->input('eventTitle'),
            'textarea'=>$request->input('eventText'),
            'number'=>'',
            'image'=> $destinationPath . '/' . $myimage
        ];
        Admin::create($postdata);
        return redirect('events')->with(['message' => 'Event added successfully!!', 'status'=> 'success']);
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
        //
        $event = Admin::find($id);
        $event->delete();
        return redirect('events')->with(['message' => 'Event deleted successfully!!', 'status'=> 'danger']);
    }
}
