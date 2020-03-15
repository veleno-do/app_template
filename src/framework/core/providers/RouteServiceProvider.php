<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;     // => ./ApplicationServiceProviderInterface.php
use \MyMVC\Core\Router\Route as Route;                                                  // => /framework/core/router/Route.php

class RouteServiceProvider extends Route implements ProviderInterface
{
    /**
     * Indicates the state that RouteProvider can provide.
     * 
     * RouteProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of RouteProvider.
     * 
     * RouteProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


    /**
     * Undocumented variable
     *
     * @var     object
     */
    public static $route;


    /**
     * Creates and returns a class object that can access all of the routing features.
     * And call the boot method.
     * 
     * ルーティングの機能の全てにアクセスする事ができるクラスオブジェクトを作成し返します。
     * bootメソッドを呼び出します。
     *
     * @return object
     */
    public static function register()
    {
        if( !isset( self::$route ) ){
            self::$route = new self;
        }
        return self::$route->boot( self::$route );
    }


    /**
     * Make the provider available. Also, read routing rules from Web.php and Api.php and store them in a tree structure.
     * Returns the instantiated RouteServiceProvider class object.
     * 
     * プロバイダを使用可能な状態にします。又、Web.phpとApi.phpからルーティングルールを読み込み、ツリー構造にして格納します。
     * インスタンス化されたRouteServiceProviderクラスオブジェクトを返します。
     *
     * @param   object  $routeInstance
     * @return  object
     */
    public function boot( $routeInstance )
    {
        self::$STATUS = READY;

        include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/framework/routes/Web.php" );
        include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/framework/routes/Api.php" );

        return $routeInstance;
    }
}
