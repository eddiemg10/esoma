<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
        $isPremiumMember = 0;

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
