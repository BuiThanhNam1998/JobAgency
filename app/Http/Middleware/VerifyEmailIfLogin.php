<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class VerifyEmailIfLogin
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
//        if(auth()->check()) {
//            /**
//             * @var $user User
//             */
//            $user = auth()->user();
//            if($user->hasVerifiedEmail() == false) {
//                return redirect()
//            }
//        }
        return $next($request);
    }
}
