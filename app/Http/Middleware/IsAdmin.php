<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        $user = auth()->user();
        if($user->vaitro->ten == 'Quản trị viên' || $user->vaitro->ten == 'Nhân viên')
            return $next($request);
        return redirect('');
    }
}
