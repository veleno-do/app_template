<?php
/**
 * This file is the core of the Route class.
 * This file cannot be edited.
 * 
 * 
 * Routeクラスの中核を担うファイルです。
 * このファイルは編集不可です。
 */

namespace MyMVC\Core\Router;

use \MyMVC\Core\Exceptions\Exceptions as Exceptions;
use \MyMVC\Core\Router\Controller as Controller;

abstract class Route extends RequestMethodMapper
{
    public function main()
    {
        $parse_uri = RequestURIParse::parse( $this->URIFormatting( $_SERVER[ "REQUEST_URI" ] ), $this->routingTree );
        $result = $this->user->authorization( $parse_uri );
        switch( $result[ "status" ] ){
            case 200: $newResponse = new Response( new Controller( $result[ "material" ] ) );break;
            case 401: $newResponse = new Response( new Exceptions( 401 ) );break;
            case 403: $newResponse = new Response( new Exceptions( 403 ) );break;
            case 404: $newResponse = new Response( new Exceptions( 404 ) );break;
        }
        
        return $newResponse->issue();
    }


    /**
     * This is the front method that starts response acquisition.
     * Call main method.
     * 
     * レスポンス取得を開始するフロントメソッドです。
     * mainメソッドを呼びます。
     *
     * @param   object  $app
     * @return  string
     */
    public function evaluate( $user )
    {
        $this->user = $user;
        return $this->main();
    }
}
