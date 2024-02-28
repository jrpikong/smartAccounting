<?php

namespace Jrpikong\SmartAccounting\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum AccountType: string implements HasColor, HasLabel
{
    case ROUTINE_COST = 'ROUTINE COST';
    case NON_ROUTINE_COST = 'NON ROUTINE COST';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ROUTINE_COST => 'ROUTINE COST',
            self::NON_ROUTINE_COST => 'NON ROUTINE COST',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::ROUTINE_COST => 'info',
            self::NON_ROUTINE_COST => 'warning',
        };
    }
}
