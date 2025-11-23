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
        $passport = Passport::where('user_id', Auth::id())->with(['status'])->first();
        if ($passport->status->title !== 'verified' || $passport->status->null) {
            return redirect()->back()->with('error', 'Обновите паспортные данные');
        }

        return $next($request);
    }
}
