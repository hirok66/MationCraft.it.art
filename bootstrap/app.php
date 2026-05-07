<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

    $middleware->alias([
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
        'user' => \App\Http\Middleware\UserMidleware::class,
        'moderator' => \App\Http\Middleware\ModeratorrMidleware::class,
        'editor' => \App\Http\Middleware\EditeorMidleware::class,
    ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
