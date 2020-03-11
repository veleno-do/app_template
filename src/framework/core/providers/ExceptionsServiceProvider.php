<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;

class ExceptionsServiceProvider implements ProviderInterface
{
    public static $exceptions;

    public static function register()
    {

    }


    public function boot( $exceptionsInstance )
    {
        
    }
}
