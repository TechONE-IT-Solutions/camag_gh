<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class adminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$result['udues'] = Admin::where('meta_key', 'U_dues');
        //$result['uregistration'] = Admin::where('meta_key', 'U_registration');
        $result['udues'] = Admin::get_regdues('U_dues');
        $result['uregistration'] = Admin::get_regdues('U_registration');

        return view('admin.payment')->with($result);
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
        Admin::updateOrCreate(['meta_key'=>$request->input('regdues')],
        [
            'meta_key'=>$request->input('regdues'),
            'text'=>'',
            'textarea'=>'',
            'number'=>$request->input('amount'),
            'image'=>''
        ]);
        //Admin::updateOrCreate($postdata);
        return redirect('admin/payment')->with(['message'=> 'Updated', 'status'=>'success']);
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
