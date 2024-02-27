<?php

namespace Jrpikong\SmartAccounting\Enum;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use function Laravel\Prompts\select;

enum StatusFlow: int implements HasLabel, HasColor, HasIcon
{
    case STATUS_CREATED = 0;
    case STATUS_REVIEW = 1;
    case STATUS_FA_REVIEW = 2;
    case STATUS_FA_EXECUTOR = 3;
    case STATUS_DONE = 4;
    case STATUS_REJECT = 5;
    case PROCESS_WITHDRAWAL = 6;
    case COMPLETE_WITHDRAWAL = 7;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::STATUS_CREATED => 'CREATED',
            self::STATUS_REVIEW => 'IN REVIEW',
            self::STATUS_FA_REVIEW => 'FINANCE REVIEW',
            self::STATUS_FA_EXECUTOR => 'FINANCE EXECUTOR',
            self::STATUS_DONE => 'COMPLETE',
            self::STATUS_REJECT => 'REJECT',
            self::PROCESS_WITHDRAWAL => 'PROCESS WITHDRAWAL',
            self::COMPLETE_WITHDRAWAL => 'COMPLETE WITHDRAWAL'
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::STATUS_CREATED, self::STATUS_FA_EXECUTOR, self::STATUS_FA_REVIEW => 'info',
            self::STATUS_REVIEW => 'in_review',
            self::STATUS_DONE => 'complete',
            self::PROCESS_WITHDRAWAL => 'withdrawal',
            self::COMPLETE_WITHDRAWAL => 'success',
            self::STATUS_REJECT => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::STATUS_CREATED => 'heroicon-m-pencil',
            self::STATUS_FA_EXECUTOR, self::STATUS_REVIEW, self::STATUS_FA_REVIEW => 'heroicon-m-eye',
            self::STATUS_DONE, self::COMPLETE_WITHDRAWAL => 'heroicon-m-check',
            self::STATUS_REJECT => 'heroicon-o-stop-circle',
            self::PROCESS_WITHDRAWAL => 'heroicon-m-arrows-right-left',
        };
    }
}
