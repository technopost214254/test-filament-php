<?php

namespace Modules\Shop;

use Filament\Contracts\Plugin;
use Filament\Panel;

class ShopPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'shop';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->discoverResources(
                in: __DIR__ . '/Filament/Resources',
                for: 'Modules\\Shop\\Filament\\Resources'
            )
            ->discoverPages(
                in: __DIR__ . '/Filament/Pages',
                for: 'Modules\\Shop\\Filament\\Pages'
            )
            ->discoverWidgets(
                in: __DIR__ . '/Filament/Widgets',
                for: 'Modules\\Shop\\Filament\\Widgets'
            );
    }

    public function boot(Panel $panel): void
    {
        //
    }
}