<?php

namespace Jrpikong\SmartAccounting\Commands;

use Illuminate\Console\Command;

class SmartAccountingCommand extends Command
{
    public $signature = 'smartaccounting';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
