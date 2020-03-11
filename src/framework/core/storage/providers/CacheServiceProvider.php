<?php

namespace MyMVC\Core\Storage\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;

class CacheServiceProvider implements ProviderInterface
{
    public static $cache;

    public static function register()
    {

    }


    public function boot( $cacheInstance )
    {
        
    }
}
