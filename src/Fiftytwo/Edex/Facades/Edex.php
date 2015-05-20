<?php namespace Fiftytwo\Edex\Facades;

use Illuminate\Support\Facades\Facade;

class Edex extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'edex';
    }
}