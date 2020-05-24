<?php

namespace App\Http\Middleware;

use Closure;

class checkage
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
        if($request->age && $request->age<20)
        {
            return redirect('unauthroized');
        }

        return $next($request);
    }
}
