<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request){

        $user = $request->user;
        $code = $request->code;

        $payment = Payment::where('access_code', $code)->first();

        if($payment){

            $subscription = new Subscription();
            $subscription->user_id = $user;
            $subscription->payment_id = $payment->id;
            $subscription->type = $this->getSubscriptionType($payment->amount);
            $subscription->save();
            

            return redirect()->back()->with('success', 'Account successfully activated');
        }

        else{
            return redirect()->back()->with('error', 'Please enter a valid code');
        }
    }

    public function getSubscriptionType($payment){
        if($payment >= 50 &&  $payment < 200){
            return "weekly";
        }
        if($payment >= 200 &&  $payment < 500){
            return "monthly";

        }
        if($payment >= 500 &&  $payment < 1800){
            return "termly";

        }
        if($payment >= 180){
            return "yearly";

        }

    }
}
