<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Account;

class AdminLoginMiddleware
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
        if(Auth::check()){
            $user =Auth::user();
            if($user->status ==1)
                return $next($request);
            else
                 return redirect('admin/login');
        }
        else{
             return redirect('admin/login');
        }
        
    }
}
