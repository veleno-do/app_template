<?php

namespace MyMVC\Core\Storage\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;     // => /framework/core/providers/ApplicationServiceProviderInterface.php
use \MyMVC\Core\Storage\Cookie as Cookie;                                               // => /framework/core/storage/Cookie.php

class CookieServiceProvider extends Cookie implements ProviderInterface
{
    public static $cookie;


    public static function register()
    {
        if( !isset( self::$cookie ) ){
            self::$cookie = new self;
        }
        return self::$cookie->boot( self::$cookie );
    }


    public function boot( $cookieInstance )
    {
        return $cookieInstance;
    }
}
