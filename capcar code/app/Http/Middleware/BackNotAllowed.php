<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BackNotAllowed
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
        $response = $next($request);
        return $response->header('Cache-Control', 'no-cache, no-store, max-age-0, must-revalidate')
        ->header("Pragma", "no-cache")
        ->header('Expires", "Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
