<?php

namespace MyMVC\Core\Router;

class RequestURIParse
{
    public static function Parse( $uri, $tree )
    {
        if( isset( $uri, $tree ) ){
            $var = $tree[ "/" ];
            for( $index = 1; $index < count( $uri ); $index ++ ){
                if( isset( $var[ $uri[ $index ] ] ) ){
                    $var = $var[ $uri[ $index ] ];
                }else{
                    $var = NULL;
                }
            }
        }
        return [
            "path" => $uri,
            "controller" => $var,
        ];
    }
}
