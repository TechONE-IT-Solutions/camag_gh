<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;

class adminPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $duesW = Payment::where('payment_type','dues')->get();
        $donations = Payment::where('payment_type','donation')->get();

        $result['udues'] = Admin::get_regdues('U_dues');
        $result['uregistration'] = Admin::get_regdues('U_registration');

        return view('admin.payment', [
            'result' => $result,
            'duesW' => $duesW,
            'donations' => $donations,
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getData($transactionReference)
    {
        $member = Payment::where('transaction_reference', $transactionReference )->first();
        if($member){
            return response()->json([
                'success'=> true,
                'memberName'=> $member->name,
                'memberPhone'=> $member->phone,
            ]);
        }
        else{
            return response()->json([
                'success'=> false,
            ]);
        }
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
