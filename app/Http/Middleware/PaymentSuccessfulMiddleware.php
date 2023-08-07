<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// app/Http/Middleware/PaymentSuccessfulMiddleware.php

namespace App\Http\Middleware;

use Closure;

class PaymentSuccessfulMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the payment is successful (you can retrieve the payment status from the session or database)
        // Replace 'payment_successful' with your actual session or database key storing the payment status
        if ($request->session()->get('payment_successful') === true) {
            return $next($request);
        }

        // Payment not successful, redirect to another page (e.g., /not_successful_payment)
        return redirect('/not_successful_payment');
    }
}
