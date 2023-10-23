<?php

namespace App\Providers;

use App\View\Components\NavBar;
use Debugbar;
use Illuminate\Support\Facades\Blade;
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
        // Debugbar::disable();
        Blade::component('navigation-bar', NavBar::class);
    }
}
