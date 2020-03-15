<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Exceptions\Exceptions as Exceptions;

class ExceptionsServiceProvider extends Exceptions implements ProviderInterface
{
    /**
     * Indicates the state that ExceptionsServiceProvider can provide.
     * 
     * ExceptionsServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of ExceptionsServiceProvider.
     * 
     * ExceptionsServiceProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


    public static $exceptions;

    
    public static function register()
    {
        if( !isset( self::$exceptions ) ){
            self::$exceptions = new self;
        }
        return self::$exceptions->boot( self::$exceptions );
    }


    public function boot( $exceptionsInstance )
    {
        self::$STATUS = READY;

        return $exceptionsInstance;
    }
}
