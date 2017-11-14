<?php

namespace App\Http\Middleware;

use Closure;

class DomingoMiddleware
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
      if(date('w') == 0){
        echo 'es domingo';
      }else{
        echo 'no es domingo';
      }
        return $next($request);
    }
}
