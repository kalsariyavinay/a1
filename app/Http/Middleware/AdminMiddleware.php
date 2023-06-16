<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth; 
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth ::check())
        {
            if(Auth::user()->user_type == 2)
                {
                    return $next($request);
                }
            else if(Auth::user()->user_type == 1)
                {
                    return redirect('/admin/login');
                }
        }
        else
         {
            return redirect()->route('adminlogin');
         }
    }
}
