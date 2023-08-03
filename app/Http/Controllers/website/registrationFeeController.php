<?php

namespace App\Http\Controllers\website;

use App\Models\Admin\Admin;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class registrationFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result['udues'] = Admin::get_regdues('U_dues');
        $result['uregistration'] = Admin::get_regdues('U_registration');
        return view('website.registration')->with($result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    public function createSubAccount()
    {
        //
    $response = Http::withToken('sk_test_465acf97eef2f0b681ee3ed07ed25cc9ad31f6b3')->post("https://api.paystack.co/subaccount", [
        "business_name" => "CONCERNED ASSEMBLY MEMBERS ASSOCIATION OF GHANA LBG",
      "bank_code" => "240100",
      "account_number" => "0123456789",
      "percentage_charge" => 0,
    ]);
    }

    public function initializePayment()
    {
        //
    $response = Http::withToken('sk_test_465acf97eef2f0b681ee3ed07ed25cc9ad31f6b3')->post("https://api.paystack.co/transaction/initialize", [
        "business_name" => "CONCERNED ASSEMBLY MEMBERS ASSOCIATION OF GHANA LBG",
        "email"=> "twumdavid86@gmail.com",
        "amount"=>"20000",
        "subaccount"=> "Acct"
    ]);
    }

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
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
