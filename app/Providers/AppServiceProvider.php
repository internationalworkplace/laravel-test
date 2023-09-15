<?php

namespace App\Providers;

use App\Contracts\CosmologyInterface;
use App\Services\ArcSecondService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            CosmologyInterface::class,
            ArcSecondService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
