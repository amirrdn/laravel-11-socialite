<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckMembership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $type)
    {
        $user = Auth::user();
        switch ($type) {
            case 'A':
                if ($user->membership_type == 'A') {
                    return $next($request);
                }
                break;
            case 'B':
                if ($user->membership_type == 'B') {
                    return $next($request);
                }
                break;
            case 'C':
                if ($user->membership_type == 'C') {
                    return $next($request);
                }
                break;
        }

        return redirect('/home')->withErrors('Access Denied');
    }
}
