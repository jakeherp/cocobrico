<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNoCustomer
{
    /**
     * Handle an incoming request. Redirecs the user to the email form, if his account has not been activated yet.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if(!$user->hasPermission('is_customer')){
                return redirect('/')->withErrors([' Your account has not been activated yet. A member of staff will check your entered details and will get in touch with you shortly.']);
            }
        }

        return $next($request);
    }
}
