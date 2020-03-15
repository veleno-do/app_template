<?php

namespace MyMVC\Core\Storage\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;     // => /framework/core/providers/ApplicationServiceProviderInterface.php
use \MyMVC\Core\Storage\Cache as Cache;                                                 // => /framework/core/storage/Cache.php

class CacheServiceProvider extends Cache implements ProviderInterface
{
    /**
     * Indicates the state that CacheServiceProvider can provide.
     * 
     * CacheServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of CacheServiceProvider.
     * 
     * CacheServiceProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


    public static $cache;


    public static function register()
    {
        if( !isset( self::$cache ) ){
            self::$cache = new self;
        }
        return self::$cache->boot( self::$cache );
    }


    public function boot( $cacheInstance )
    {
        self::$STATUS = READY;

        return $cacheInstance;
    }
}
