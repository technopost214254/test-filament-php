<?php

namespace Modules\Shop;

use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // bindings, config merge yahan
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');

        // agar routes / views / translations ho to:
        // $this->loadRoutesFrom(__DIR__ . '/routes.php');
        // $this->loadViewsFrom(__DIR__ . '/Resources/views', 'shop');
    }
}