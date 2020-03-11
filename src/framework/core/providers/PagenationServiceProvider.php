<?php

namespace MyMVC\Core\Providers;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ProviderInterface;

class PagenationServiceProvider implements ProviderInterface
{
    public static $pagenation;

    public static function register()
    {

    }


    public function boot( $pagenationInstance )
    {
        
    }
}
