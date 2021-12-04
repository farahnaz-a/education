<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\Charge;
use Stripe\Stripe;
use Session;

class StripePaymentController extends Controller
{
     /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('payment_gateway.stripe');
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
