<?php

namespace App\Http\Middleware;

use App\Models\Subscription;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isPremium
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Get from db
        $subscription = Subscription::where('user_id', Auth::User()->id)->where('valid', 1)->first();

        $isPremiumMember = $subscription ? 1 : 0 ;

        //Fetch the file using Id
        $fileId = $request->route('id');

        if($isPremiumMember){
            //redirect to the file if premium...change the file name 
            return redirect(asset("assets/doc_1655795826pdf"));
        }
        else{
            return redirect('dashboard/activate');

        }

    }
}
