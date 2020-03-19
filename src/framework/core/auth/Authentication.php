<?php

namespace MyMVC\Core\Auth;

use \MyMVC\Core\Storage\Session as Session;

class Authentication
{
    public function filter()
    {
        if( Session::sessionIsset( "Authentication_Infomation" ) ){
            $user = Session::sessionGet( "Authentication_Infomation" );
            return new User( $user );   // => 中身はid
        }else{
            return new User( "guest" );
        }
    }
}
