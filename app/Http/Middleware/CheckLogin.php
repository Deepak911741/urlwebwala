<?php

namespace App\Http\Middleware;

use App\Models\Settings_model;
use Closure;
use Illuminate\Http\Request;

class checkLogin
{
    public function handle(Request $request, Closure $next)
    {
        if( ( session()->has('isLoggedIn') ) && ( session()->get('isLoggedIn') != false ) ){
    		
            $request->loggedUserId = ( session()->has('user_id') ? session()->get('user_id') : 0 ) ;
            return $next($request);
    	}
    	session()->put('url.intended', url()->current());
    	return apiResponse(401, 'Unauthorized access. Please log in to continue.');
    }
}
