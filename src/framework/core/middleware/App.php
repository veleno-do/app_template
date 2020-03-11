<?php
/**
 * Write the main middleware of the application.
 * This file cannot be edited.
 * 
 * 
 * アプリケーションのメインミドルウェアを記述します。
 * このファイルは編集不可です。
 */

namespace MyMVC\Core\Middleware;

abstract class App
{
    public $response;

    public function getResponse()
    {
        if( $this->route::$STATUS ){
            echo var_dump( $this->route::$routingTable );
        }
    }


    public function send()
    {
        if( $this->views::$STATUS ){
            echo "view";
        }        
    }


    /**
     * Get all providers and call the register method of each provider.
     * Objects returned from the register method can be accessed from this.
     * 
     * 全プロバイダーを取得し、各プロバイダーのregisterメソッドを呼び出します。
     * registerメソッドから返って来たオブジェクトはthisからアクセスできます。
     * 
     * @return  void
     */
    public function paramRegister()
    {
        $array = array();
        $referrer = new \ReflectionClass( static::class );
        foreach( $referrer->getConstants() as $key => $value ){
            foreach( $value as $constant_name => $provider ){
                $this->$constant_name = $provider::register();
            }
        }
    }


    /**
     * Call the ini_set function of php to set the initial settings.
     * Each parameter of php uses the value provided by EnvProvider.
     * 
     * phpのini_set関数を呼び出し初期設定を設定します。
     * phpの各パラメーターはEnvProviderより提供された値を使用します。
     *
     * @return  void
     */
    public function init()
    {
        ini_set( "date_timezone", $this->env->DATE_TIMEZONE );
        ini_set( "display_errors", $this->env->DISPLAY_ERROR );
        ini_set( "error_reporting", $this->env->ERROR_REPORTING );
        ini_set( "memory_limit", $this->env->MEMORY_LIMIT );
        ini_set( "log_errors", $this->env->LOG_ERROR );
        ini_set( "error_log", $this->env->ERROR_LOG_PATH );
        ini_set( "max_execution_time", $this->env->MAX_EXECUTION_TIME );
        ini_set( "default_charset", $this->env->DEFAULT_CHARSET );
        // ini_set( "mbstring.internal_encoding", $this->env->MBSTRING_INTERNAL_ENCODING );    // => Not recommended.
        ini_set( "mbstring.language", $this->env->MBSTRING_LANGUAGE );
        ini_set( "session.cookie_secure", $this->env->COOKIE_SECURE );
        ini_set( "session.cookie_path", $this->env->SESSION_COOKIE_PATH );
        ini_set( "session.cookie_httponly", $this->env->COOKIE_HTTP_ONLY );
        ini_set( "session.gc_maxlifetime", $this->env->SESSION_MAXLIFETIME );
    }

    
    
    /**
     * Is a constructor.
     * Responsible for the initial operation of the application.
     * 
     * コンストラクタです。
     * アプリケーションの初期動作を担います。
     */
    public function __construct()
    {
        $this->paramRegister();

        $this->init();
    }
}
