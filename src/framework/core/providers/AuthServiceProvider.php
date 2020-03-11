<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;

class AuthServiceProvider implements ProviderInterface
{
    public static $auth;

    public static function register()
    {

    }


    public function boot( $authInstance )
    {
        
    }
}
