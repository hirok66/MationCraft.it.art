<?php

namespace App\Providers;

use App\Models\adminLogo;
use App\Models\FrontendLogo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('frontend_logo', FrontendLogo::latest()->first());
            $view->with('admin_logo', adminLogo::latest()->first());
        });
    }
}
