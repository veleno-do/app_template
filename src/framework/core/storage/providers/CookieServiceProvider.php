<?php

namespace MyMVC\Core\Storage\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;     // => /framework/core/providers/ApplicationServiceProviderInterface.php
use \MyMVC\Core\Storage\Cookie as Cookie;                                               // => /framework/core/storage/Cookie.php

class CookieServiceProvider extends Cookie implements ProviderInterface
{
    /**
     * Indicates the state that CookieServiceProvider can provide.
     * 
     * CookieServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of CookieServiceProvider.
     * 
     * CookieServiceProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


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
        self::$STATUS = READY;

        return $cookieInstance;
    }
}
