<?php

namespace MyMVC\Model;

use \MyMVC\Core\Providers\ApplicationServiceProviderInterface as ServiceInterface;     // => /framework/core/providers/ApplicationServiceProviderInterface.php
use \MyMVC\Model\Model as Model;
use \MyMVC\Model\DBParam as DB;

class ModelServiceProvider implements ServiceInterface
{
    public static $data;


    public static $model;


    public static function register()
    {
        try{
            if( !isset( self::$data ) && !isset( self::$model ) ){
                self::$data = new \PDO(
                    "mysql:dbname=" . DB::DATABASE_NAME . ";host=" . DB::DATABASE_HOST,
                    DB::DATABASE_USER,
                    DB::DATABASE_PASSWORD,
                    [
                        \PDO::ATTR_PERSISTENT => true,
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                    ]
                );
                self::$model = new self;
            }
        }catch( \Exception $e ){
            echo $e->getMessage();
            die();
        }
        return self::$model->boot( self::$data );
    }


    public function boot( $modelInstance )
    {
        if( isset( $modelInstance ) ){
            return "In operation";
        }else{
            return "Not operating";
        }
    }
}
