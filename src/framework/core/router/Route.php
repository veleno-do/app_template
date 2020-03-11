<?php

namespace MyMVC\Core\Router;

abstract class Route extends RequestMethodRegister
{
    public function evaluation()
    {
        // Temporary response
        $array = [
            "infomation" => [
                "author" => "Yuto Hayashi",
                "age" => 21,
                "sex" => "male",
                "other" => [
                    "region" => "Japan",
                ]
            ]
        ];
        return json_encode( $array, JSON_UNESCAPED_UNICODE );
    }
}
