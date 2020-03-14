<?php

namespace MyMVC\Core\Router;

class RequestURIAnalysis
{
    public static function Parse()
    {
        return parse_url( $_SERVER[ "REQUEST_URI" ] );
    }
}
