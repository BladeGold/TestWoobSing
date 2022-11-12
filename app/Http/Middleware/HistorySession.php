<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Log;
class HistorySession
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
       $last_login = $request->user()->HistorySession->last()->last_login; 
       $currentDate = Carbon::now();
       $diff = $currentDate->diffInDays($last_login);

       if($diff > 0) {
        return redirect('sesiones');
       }
        return $next($request);
    }
}
