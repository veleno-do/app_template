<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Validation\Validation as Validation;

class ValidationServiceProvider extends Validation implements ProviderInterface
{
    /**
     * Indicates the state that ValidationServiceProvider can provide.
     * 
     * ValidationServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of ValidationServiceProvider.
     * 
     * ValidationServiceProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


    public static $validation;

    
    public static function register()
    {
        if( !isset( self::$validation ) ){
            self::$validation = new self;
        }
        return self::$validation->boot( self::$validation );
    }


    public function boot( $validationInstance )
    {
        self::$STATUS = READY;
        
        return $validationInstance;
    }
}
