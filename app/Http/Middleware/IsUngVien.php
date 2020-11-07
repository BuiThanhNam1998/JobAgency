<?php

namespace App\Http\Middleware;

use Closure;

class IsUngVien
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
        if($user->vaitro->ten == 'Ứng viên')
            return $next($request);
        return redirect('');
    }
}
