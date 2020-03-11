<?php

namespace MyMVC\Core\Storage\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;

class CookieServiceProvider implements ProviderInterface
{
    public static $cookie;

    public static function register()
    {

    }


    public function boot( $cookieInstance )
    {
        
    }
}
