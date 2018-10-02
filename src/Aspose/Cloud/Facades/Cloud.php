<?php
 
namespace Aspose\Cloud\Facades;

use Illuminate\Support\Facades\Facade;

class Cloud extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'aspose';
    }
}