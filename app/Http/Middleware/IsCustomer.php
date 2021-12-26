<?php

namespace App\Http\Middleware;

use Closure;

class IsCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* return $next($request); */
        if(auth()->customer()->is_customer==2){
            return $next($request);
        }
        return redirect('home')->with('error','You have no customer access');
    }
        
}
