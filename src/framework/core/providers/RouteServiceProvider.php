<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Router\Route as Route;

class RouteServiceProvider extends Route implements ProviderInterface
{
    /**
     * Indicates the state that RouteProvider can provide.
     * 
     * RouteProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of RoutenProvider.
     * 
     * RouteProviderの状態を表します。
     *
     * @var boolean
     */
    public static $STATUS;


    public static $route;

    public static function register()
    {
        if( !isset( self::$route ) ){
            self::$route = new self;
        }
        return self::$route->boot( self::$route );
    }


    public function boot( $routeInstance )
    {
        self::$STATUS = READY;

        include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/framework/routes/Web.php" );
        include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/framework/routes/Api.php" );

        return $routeInstance;
    }
}
