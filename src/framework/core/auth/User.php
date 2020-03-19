<?php

namespace MyMVC\Core\Auth;

class User
{
    public function __construct( $id )
    {
        $this->id = $id;
    }


    public function authorization( $parsed )
    {
        $path = $parsed[ "path" ];
        $controller = $parsed[ "controller" ];
        if( isset( $this->id, $path, $controller ) ){
            $role = $this->getRole( $path );
            if( isset( $role ) ){

            }else{
                return [
                    "status" => 200,
                    "material" => $controller,
                ];
            }
        }else{
            return [
                "status" => 404,
                "material" => $controller,
            ];
        }
    }


    public function getRole( $path )
    {

    }
}
