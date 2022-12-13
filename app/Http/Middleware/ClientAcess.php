<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientAcess
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
        if(auth()->check() AND auth()->user()->client)
        {
            return $next($request);
        }
        else if(!auth()->check())
        {
                return redirect('/login');
        }
        else 
        {
            return redirect()->route('home');
        } 
    }
}
