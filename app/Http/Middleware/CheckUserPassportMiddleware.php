<?php

namespace App\Http\Middleware;

use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Closure;

class CheckUserPassportMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $driveLicense = DriveLicense::where('user_id', Auth::id())->with(['status'])->first();
        if ($driveLicense->status->title !== 'verified' || $driveLicense->status->null) {
            return redirect()->back()->with('error', 'Обновите В/У');
        }
        return $next($request);
    }
}
