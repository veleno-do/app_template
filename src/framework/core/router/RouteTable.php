<?php
/**
 * We have prepared a table to store the routing rules described in Web.php and Api.php.
 * This file cannot be edited.
 * 
 * Web.phpとApi.phpに記述されているルーティングルールを格納するテーブルを用意します。
 * このファイルは編集不可です。
 */

namespace MyMVC\Core\Router;

abstract class RouteTable
{
    /**
     * This is the body of the routing table.
     * Each routing rule is stored in new of HttpApplication.
     * 
     * ルーティングテーブルの本体です。
     * HttpApplicationのnewで各ルーティングルールが格納されます。
     *
     * @var array
     */
    public static $routingTable = [
        "get"       =>  [],
        "post"      =>  [],
        "put"       =>  [],
        "delete"    =>  [],
        "parameter" =>  [],
    ];
}
