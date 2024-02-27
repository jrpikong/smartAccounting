<?php

namespace Jrpikong\SmartAccounting\Filament\Clusters;

use Filament\Clusters\Cluster;

class AccountingSystemSetup extends Cluster
{
    protected static ?string $navigationIcon = 'heroicon-s-cog';

    public static function getNavigationLabel(): string
    {
        return __('System Setup');
    }

    protected static ?string $navigationGroup = 'ACCOUNTING';

    protected static ?int $navigationSort = 10;
}
