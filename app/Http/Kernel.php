<?php

namespace App\Http;

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Aliases de middleware de ruta (Laravel 10+).
     *
     * @var array<string,string>
     */
    protected $middlewareAliases = [
        'auth'      => Authenticate::class,
        'verified'  => EnsureEmailIsVerified::class,
        'admin'     => AdminMiddleware::class,
        // otros alias…
    ];

    // …
}