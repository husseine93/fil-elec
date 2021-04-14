<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Http\Middleware\Auth;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = $request->user();
        if($user && $user->role !=1 )
        {
            return redirect('/products');
        }   

        return $next($request);
    }
}
