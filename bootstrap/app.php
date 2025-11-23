<?php

use App\Http\Middleware\CheckAdminRoleMiddleware;
use App\Http\Middleware\CheckManagerRoleMiddleware;
use App\Http\Middleware\CheckUserDriveLicenseMiddleware;
use App\Http\Middleware\CheckUserPassportMiddleware;
use App\Http\Middleware\CheckUserRoleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Application;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'role:admin' => CheckAdminRoleMiddleware::class,
            'role:manager' => CheckManagerRoleMiddleware::class,
            'role:user' => CheckUserRoleMiddleware::class,
            'document:passport' => CheckUserPassportMiddleware::class,
            'document:driveLicense' => CheckUserDriveLicenseMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->create();
