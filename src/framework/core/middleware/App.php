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
    /**
     * This variable stores the http response obtained by the getResponse method.
     *
     * @var string  text/html or application/json
     */
    public $response;


    /**
     * Pass the appropriate provider to start the routing process and get the response from the appropriate controller.
     * Store the obtained response in $ this-> response and prepare to send it to the client by the send method.
     * 
     * 適当なプロバイダを渡してルーティング処理を開始させ、適切なコントローラーからレスポンスを取得します。
     * 取得したレスポンスは、$this->responseに格納し、sendメソッドによりクライアントに送信する準備を行います。 
     *
     * @return  void
     */
    public function getResponse()
    {
        if( $this->route::$STATUS ){
            $this->response = $this->route->evaluation( $this->auth, $this->broadcasting, $this->exceptions, $this->pagenation, $this->validation, $this->views );
        }
    }


    /**
     * Send the response to the client.
     * If output is started before calling the send method, it will not work properly.
     * There are response types in application / json and text / html.
     * The description of the response header is changed for each type of response.
     * 
     * レスポンスをクライアントに送信します。
     * sendメソッドの呼び出し前にoutputを開始すると正常に動作しません。
     * レスポンスの種類はapplication/jsonとtext/htmlの二種類あります。
     * レスポンスの種類別でレスポンスヘッダの記述を変えています。
     *
     * @return  string  text/html
     */
    public function send()
    {
        if( is_string( $this->response ) && is_array( json_decode( $this->response, TRUE ) ) && ( json_last_error() == JSON_ERROR_NONE ) ? TRUE : FALSE ){      // => Judges whether the response type is json or not.
            // Case what $this->response is application/json        => $this->responseがapplication/jsonの場合
            header( "Content-Type: application/json" );
            echo $this->response;
        }else{
            // Case what $this->response is not application/json    => $this->responseがtext/htmlの場合
            header( "Content-Type: text/html" );
            echo $this->response;
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
