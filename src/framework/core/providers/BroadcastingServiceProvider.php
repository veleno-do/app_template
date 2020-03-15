<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Broadcast\Broadcasting as Broadcasting;

class BroadcastingServiceProvider extends Broadcasting implements ProviderInterface
{
    /**
     * Indicates the state that BroadcastingServiceProvider can provide.
     * 
     * BroadcastingServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of BroadcastingServiceProvider.
     * 
     * BroadcastingServiceProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


    public static $broadcasting;

    
    public static function register()
    {
        if( !isset( self::$broadcasting ) ){
            self::$broadcasting = new self;
        }
        return self::$broadcasting->boot( self::$broadcasting );
    }


    public function boot( $broadcastingInstance )
    {
        self::$STATUS = READY;

        return $broadcastingInstance;
    }
}
