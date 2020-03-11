<?php
/**
 * Store requests in sorting variables by method.
 * This file cannot be edited.
 * 
 * 
 * リクエストをメソッド別で仕分け変数に格納します。
 * このファイル編集不可です。
 */

namespace MyMVC\Core\Router;

abstract class RequestMethodRegister extends RouteTable
{
    /**
     * Stores the process for get request.
     * 
     * Getリクエストに対する処理を格納します。
     *
     * @param   string  $routePath
     * @param   string  $routeOption
     * @return  void
     */
    public static function get( $routePath, $routeOption = NULL )
    {
        array_push( self::$routingTable[ "get" ], [
            $routePath => $routeOption
        ] );
    }


    /**
     * Stores the process for post request.
     * 
     * Postリクエストに対する処理を格納します。
     *
     * @param   string  $routePath
     * @param   string  $routeOption
     * @return  void
     */
    public static function post( $routePath, $routeOption = NULL )
    {
        array_push( self::$routingTable[ "post" ], [
            $routePath => $routeOption
        ] );
    }
    

    /**
     * Stores the process for put request.
     * 
     * Putリクエストに対する処理を格納します。
     *
     * @param   string  $routePath
     * @param   string  $routeOption
     * @return  void
     */
    public static function put( $routePath, $routeOption = NULL )
    {
        array_push( self::$routingTable[ "put" ], [
            $routePath => $routeOption
        ] );
    }
    

    /**
     * Stores the process for delete request.
     * 
     * Deleteリクエストに対する処理を格納します。
     *
     * @param   string  $routePath
     * @param   string  $routeOption
     * @return  void
     */
    public static function delete( $routePath, $routeOption = NULL )
    {
        array_push( self::$routingTable[ "delete" ], [
            $routePath => $routeOption
        ] );
    }
    

    /**
     * Stores the definition of various parameters.
     * 
     * 各種パラメーターの定義を格納します。
     *
     * @param   string  $routePath
     * @param   string  $routeOption
     * @return  void
     */
    public static function parameter( $routePath, $routeOption = NULL )
    {
        array_push( self::$routingTable[ "parameter" ], [
            $routePath => $routeOption
        ] );
    }
}
