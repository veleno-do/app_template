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

use \MyMVC\Core\Router\Request\AcceptGETRequest as AcceptGETRequest;
use \MyMVC\Core\Router\Request\AcceptPOSTRequest as AcceptPOSTRequest;
use \MyMVC\Core\Router\Request\AcceptPUTRequest as AcceptPUTRequest;
use \MyMVC\Core\Router\Request\AcceptDELETERequest as AcceptDELETERequest;
use \MyMVC\Core\Exceptions\Exceptions as Exceptions;

abstract class Route extends RequestMethodMapper
{
    public $request_uri;


    public $parse_method;
    public $parse_option;


    public function main()
    {
        $parse_uri = RequestURIParse::parse();
        if( isset( $parse_uri ) ){
            foreach( $parse_uri as $method => $option ){
                switch( $method ){
                    case "GET":     return new AcceptGETRequest( $option );
                    case "POST":    return new AcceptPOSTRequest( $option );
                    case "PUT":     return new AcceptPUTRequest( $option );
                    case "DELETE":  return new AcceptDELETERequest( $option );
                    default:        return new Exceptions( "HTTP/1.1 502 Bad Gateway" );
                }
            }
        }
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
    public function evaluate()
    {
        $this->request_uri = $_SERVER[ "REQUEST_URI" ];
        return $this->main();
    }
}
