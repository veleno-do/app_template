<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Pagenation\Pagenation as Pagenation;

class PagenationServiceProvider extends Pagenation implements ProviderInterface
{
    /**
     * Indicates the state that PagenationServiceProvider can provide.
     * 
     * PagenationServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of PagenationServiceProvider.
     * 
     * PagenationServiceProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


    public static $pagenation;


    public static function register()
    {
        if( !isset( self::$pagenation ) ){
            self::$pagenation = new self;
        }
        return self::$pagenation->boot( self::$pagenation );
    }


    public function boot( $pagenationInstance )
    {
        self::$STATUS = READY;

        return $pagenationInstance;
    }
}
