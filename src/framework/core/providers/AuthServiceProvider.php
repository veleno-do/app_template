<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Auth\Auth as Auth;

class AuthServiceProvider implements ProviderInterface
{
    /**
     * Indicates the state that AuthServiceProvider can provide.
     * 
     * AuthServiceProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of AuthServiceProvider.
     * 
     * AuthServiceProviderの状態を表します。
     *
     * @var     boolean
     */
    public static $STATUS;


    public static $auth;

    
    public static function register()
    {
        if( !isset( self::$auth ) ){
            self::$auth = new self;
        }
        return self::$auth->boot( self::$auth );
    }


    public function boot( $authInstance )
    {
        $auth = new \ReflectionClass( Auth::class );
        foreach( $auth->getConstants() as $Key => $Value ){
            foreach( $Value as $key => $value ){
                $authInstance->$key = new $value;
            }
        }
        self::$STATUS = READY;
        return $authInstance;
    }
}
