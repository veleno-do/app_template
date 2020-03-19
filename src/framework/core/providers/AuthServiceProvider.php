<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;
use \MyMVC\Core\Auth\Auth as Auth;

class AuthServiceProvider implements ProviderInterface
{
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
        return $authInstance;
    }
}
