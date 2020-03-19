<?php

namespace MyMVC\Core\Router;

class Controller implements \MyMVC\Core\Views\Material
{
    public function namespace( $class )
    {
        return "\MyMVC\App\Http\Controllers\\" . $class;
    }


    public function parseController()
    {
        if( mb_substr_count( $this->controller, "@" ) === 1 ){
            $result = explode( "@", $this->controller );
            $class = $this->namespace( $result[ 0 ] );
            $identify = $result[ 1 ];
            if( method_exists( $class, $identify ) ){
                $this->function = $class::$identify();
            }
        }
    }


    public function formatResponse()
    {
        return $this->function;
    }


    public function __construct( $items )
    {
        foreach( $items as $method => $controller ){
            $this->method = $method;
            $this->controller = $controller;
            return $this->parseController();
        }
    }
}
