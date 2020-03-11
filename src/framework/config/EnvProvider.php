<?php
/**
 * Provides settings for this application.
 * This file cannot be edited.
 * 
 * 
 * 当アプリケーションの設定を提供します。
 * このファイルは編集不可です。
 */

namespace MyMVC\Config;

use \MyMVC\Config\Env as Env;   // => ./Env.phpphp

class EnvProvider implements \MyMVC\Core\Providers\ApplicationServiceProviderInterface     // => /framework/core/providers/ApplicationServiceProviderInterface
{
    /**
     * Stores the instantiated EnvProvider class.
     * 
     * インスタンス化されたEnvProviderクラスオブジェクトを格納します。
     *
     * @var object
     */
    public static $env;


    /**
     * Instantiate the EnvProvider class and evaluate the boot method.
     * Returns the object returned from the boot method.
     * 
     * EnvProviderクラスをインスタンス化してbootメソッドを評価します。
     * bootメソッドから返されたオブジェクトを返します。
     *
     * @return  object
     */
    public static function register()
    {
        if( !isset( self::$env ) ){
            self::$env = new self;
        }
        return self::$env->boot( self::$env );
    }


    /**
     * Makes it possible to refer to all the Constants of the setting class listed in the Env class.
     * The called Constants will be stored in the instance passed by the argument with the same Constants name.
     * After that, you can access all the settings Constants from the instance returned as the return value.
     * 
     * Envクラスで羅列した設定クラスのConstantsを全て参照できるようにします。
     * 呼び出したConstantsは同じConstants名で引数で渡されたインスタンスに格納します。
     * 以降、返り値として返したインスタンスから全設定Constantsにアクセスする事ができるようになります。
     *
     * @param  object  $envInstance
     * @return object
     */
    public function boot( $envInstance )
    {
        $env = new \ReflectionClass( Env::class );
        foreach( $env->getConstants() as $Key => $Value ){
            for( $V = 0; $V < count( $Value ); $V ++ ){
                $envConstants = new \ReflectionClass( $Value[ $V ] );
                foreach( $envConstants->getConstants() as $key => $value ){
                    $envInstance->$key = $value;
                }
            }
        }
        return $envInstance;
    }


    /**
     * Returns the value corresponding to the setting Constants of the name passed in the argument.
     * 
     * 引数で渡した名前の設定Constantsに該当する値を返します。
     *
     * @param   string  $envName
     * @return  string
     */
    public function reference( $envName = NULL )
    {
        return $this->$envName;
    }
}
