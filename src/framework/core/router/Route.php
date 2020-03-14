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

abstract class Route extends RequestMethodMapper
{
    /**
     * This is the storage location of auth provider.
     *
     * @var object
     */
    public $auth;


    /**
     * This is the storage location of broadcasting provider.
     *
     * @var object
     */
    public $broadcasting;


    /**
     * This is the storage location of exceptions provider.
     *
     * @var object
     */
    public $exceptions;


    /**
     * This is the storage location of pagenation provider.
     *
     * @var object
     */
    public $pagenation;


    /**
     * This is the storage location of validation provider.
     *
     * @var object
     */
    public $validation;


    /**
     * This is the storage location of views provider.
     *
     * @var object
     */
    public $views;


    public function main()
    {
        // Temporary response
        $array = [
            "infomation" => [
                "author" => "Yuto Hayashi",
                "age" => 21,
                "sex" => "male",
                "other" => [
                    "region" => "Japan",
                ],
            ],
        ];
        return json_encode( $array, JSON_UNESCAPED_UNICODE );
    }


    /**
     * This is the front function of routing.
     * This function does nothing.
     * Store in variables of various providers and call main method.
     * 
     * routingのフロント関数です。
     * この関数自体は特に何もしません。
     * 各種プロバイダの変数への格納とmainメソッドの呼び出しを行います。
     *
     * @param   object  $auth
     * @param   object  $broadcasting
     * @param   object  $exceptions
     * @param   object  $pagenation
     * @param   object  $validation
     * @param   object  $views
     * @return  string  application/json or text/html
     */
    public function evaluation( $auth, $broadcasting, $exceptions, $pagenation, $validation, $views )
    {
        if( isset( $auth, $broadcasting, $exceptions, $pagenation, $validation, $views ) ){
            $this->auth = $auth;
            $this->broadcasting = $broadcasting;
            $this->exceptions = $exceptions;
            $this->pagenation = $pagenation;
            $this->validation = $validation;
            $this->views = $views;
        }
        return $this->main();
    }
}
