<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use App\Models\Payment;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function make_payment()
    {


        $formData = [
            'email' => request('email'),
            'name' => request('name'),
            'phone' => request('phone'),
            'amount' => request('amount') * 100,
            'currency' => 'GHS',
            'callback_url' => route('callback'),
            'metadata' => [
                'redirect_url' => 'website-registration'
            ],
        ];

        $pay = json_decode($this->initiate_payment($formData));
        if ($pay) {
            if ($pay->status) {
                return redirect($pay->data->authorization_url);
            } else {
                return back()->withError($pay->message);
            }
        } else {
            return back()->withError("Something went wrong");
        }
    }


    public function payment_callback()
    {
        $response = json_decode($this->verify_payment(request('reference')));
        if ($response) {
            if ($response->status) {
                // Payment successful, store payment information in the database
                $data = $response->data;
                $name = isset($data->metadata->name) ? $data->metadata->name : '';
                $phone = isset($data->metadata->phone) ? $data->metadata->phone : '';
                $amount = $data->amount / 100; // Convert back to the original amount

                // Store payment information in the database using the Payment model
                $payment = new Payment([
                    'name' => $name,
                    'phone' => $phone,
                    'amount' => $amount,
                    'transaction_reference' => $data->reference,
                    'successful' => true,
                ]);
                $payment->save();
                // Set the session variable to indicate successful payment
                Session::put('payment_successful', true);

                // Perform the redirection based on the condition
                if ($data->metadata->redirect_url === 'website-registration') {
                    // Redirect to specific page 1
                    return redirect()->route('website-register')->with(compact('data', 'name', 'phone', 'amount'));
                } else {
                    // Default redirection if no specific condition is met
                    return view('success', compact('data', 'name', 'phone', 'amount'));
                }
            } else {
                // Payment not successful, redirect to the appropriate page (e.g., /not_successful_payment)
                Session::put('payment_successful', false); // Set session variable to false for unsuccessful payment
                return redirect('/not_successful_payment')->withError($response->message);
            }
        } else {
            return back()->withError("Something went wrong");
        }
    }


    public function initiate_payment($formData)
    {
        // Add the user's full name to the metadata field
        $metadata = [
            'name' => $formData['name'],
            'phone' => $formData['phone'],
            'redirect_url' => $formData['metadata']['redirect_url']
        ];
        $formData['metadata'] = json_encode($metadata);

        $url = "https://api.paystack.co/transaction/initialize";

        $fields_string = http_build_query($formData);
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
            "Cache-Control: no-cache",
        ));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    public function verify_payment($reference)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . env('PAYSTACK_SECRET_KEY'),
                "Cache-Control: no-cache",
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return  $response;
    }
}
