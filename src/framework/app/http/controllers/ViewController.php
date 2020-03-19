<?php

namespace MyMVC\App\Http\Controllers;

class ViewController extends BaseController
{
    public static function getBlade( $name )
    {
        return file_get_contents( $_SERVER[ "DOCUMENT_ROOT" ] . "/framework/items/view/blade/$name.php" );
    }


    public static function welcome()
    {
        return self::getBlade( "welcome" );
    }


    public static function user()
    {
        return self::getBlade( "user" );
    }
}
