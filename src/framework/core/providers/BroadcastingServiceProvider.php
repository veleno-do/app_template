<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;

class BroadcastingServiceProvider implements ProviderInterface
{
    public static $broadcasting;

    public static function register()
    {

    }


    public function boot( $broadcastingInstance )
    {
        
    }
}
