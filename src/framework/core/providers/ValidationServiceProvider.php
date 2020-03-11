<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;

class ValidationServiceProvider implements ProviderInterface
{
    public static $validation;

    public static function register()
    {

    }


    public function boot( $validationInstance )
    {
        
    }
}
