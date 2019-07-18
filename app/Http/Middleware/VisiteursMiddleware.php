<?php
/**
 * Created by PhpStorm.
 * User: LUTHER
 * Date: 10/11/2018
 * Time: 11:14
 */

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class VisiteursMiddleware
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
        if(!Sentinel::check()){
            return $next($request);
        }elseif (Sentinel::check() && Sentinel::inRole('admin')){
            return $next($request);
        }elseif (Sentinel::check() && Sentinel::inRole('hotelier')){
            return $next($request);
        }else {
            return redirect('/');
        }
    }
}
