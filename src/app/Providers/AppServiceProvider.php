<?php

namespace App\Providers;

use App\Interfaces\CategoryInterface;
use App\Services\CategoryService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CategoryInterface::class, function ($app) {
            return new CategoryService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
