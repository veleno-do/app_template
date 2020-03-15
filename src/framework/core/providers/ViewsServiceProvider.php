<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Views\View as View;

class ViewsServiceProvider extends View implements ProviderInterface
{
    /**
     * Indicates the state that ViewServiceProvider can provide.
     * 
     * ViewServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of ViewServiceProvider.
     * 
     * ViewServiceProviderの状態を表します。
     *
     * @var boolean
     */
    public static $STATUS;


    public static $views;

    
    public static function register()
    {
        if( !isset( self::$views ) ){
            self::$views = new self;
        }
        return self::$views->boot( self::$views );
    }


    public function boot( $viewsInstance )
    {
        self::$STATUS = READY;

        return $viewsInstance;
    }
}
