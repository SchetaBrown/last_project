<?php

namespace App\Http\Middleware;

use App\Models\DriveLicense;
use App\Models\Passport;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Closure;

class CheckUserDriveLicenseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $driveLicense = DriveLicense::where('user_id', Auth::id())->with(['status'])->first();
        if ($driveLicense->status->title !== 'verified' || $driveLicense->status->title === null) {
            return redirect()->back()->with('error', 'Обновите В/У');
        }

        return $next($request);
    }
}
