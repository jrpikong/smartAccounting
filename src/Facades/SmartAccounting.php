<?php

namespace Jrpikong\SmartAccounting\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jrpikong\SmartAccounting\SmartAccounting
 */
class SmartAccounting extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jrpikong\SmartAccounting\SmartAccounting::class;
    }
}
