<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     */
    protected $middleware = [
        // Handles trusted proxies
        \App\Http\Middleware\TrustProxies::class,
        // Handles CORS
        \Fruitcake\Cors\HandleCors::class,
        // Maintenance mode
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        // Validates POST size
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        // Trims strings
        \App\Http\Middleware\TrimStrings::class,
        // Converts empty strings to null
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            // Encrypts cookies
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            // Starts session
            \Illuminate\Session\Middleware\StartSession::class,
            // Shares validation errors with views
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            // CSRF protection
            \App\Http\Middleware\VerifyCsrfToken::class,
            // Route model binding
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
    ];
}
