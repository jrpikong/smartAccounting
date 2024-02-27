<?php

namespace Jrpikong\SmartAccounting;

use Filament\Contracts\Plugin;
use Filament\Panel;

class SmartAccountingPlugin implements Plugin
{
    public function getId(): string
    {
        return 'smartaccounting';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->discoverResources(in: __DIR__.'/Filament/Resources', for: 'Jrpikong\\SmartAccounting\\Filament\\Resources')
            ->discoverClusters(in: __DIR__.'/Filament/Clusters', for: 'Jrpikong\\SmartAccounting\\Filament\\Clusters');
    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
