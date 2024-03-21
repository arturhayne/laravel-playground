<?php

namespace App\Providers;

use App\Services\BudgetShipRouteService as ServicesBudgetShipRouteService;
use App\Services\Interfaces\ShipRouteServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ShipRouteServiceInterface::class, ServicesBudgetShipRouteService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
