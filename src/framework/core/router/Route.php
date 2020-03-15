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
    public $app;


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
     * This is the front method that starts response acquisition.
     * Call main method.
     * 
     * レスポンス取得を開始するフロントメソッドです。
     * mainメソッドを呼びます。
     *
     * @param   object  $app
     * @return  string
     */
    public function evaluation( $app )
    {
        $this->app = $app;
        echo var_dump( get_class_methods( $this->session() ) );
    }


    public function cache()
    {
        return $this->app->cache;
    }


    public function cookie()
    {
        return $this->app->cookie;
    }


    public function session()
    {
        return $this->app->session;
    }


    public function auth()
    {
        return $this->app->auth;
    }


    public function broadcasting()
    {
        return $this->app->broadcasting;
    }


    public function exceptions()
    {
        return $this->app->exceptions;
    }


    public function pagenation()
    {
        return $this->app->pagenation;
    }


    public function validation()
    {
        return $this->app->validation;
    }


    public function views()
    {
        return $this->app->views;
    }
}
