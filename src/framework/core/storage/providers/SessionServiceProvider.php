<?php
/**
 * Centrally manage and provide sessions.
 * This file cannot be edited.
 * 
 * 
 * セッション機能を一元管理し提供します。
 * このファイルは編集不可です。
 */

namespace MyMVC\Core\Storage\Providers;

use \MyMVC\Core\Storage\Session as Session;     // => /framework/core/storage/Session.php

class SessionServiceProvider extends Session implements \MyMVC\Core\Providers\ApplicationServiceProviderInterface   // => /framework/core/providers/ApplicationServiceProviderInterface
{
    /**
     * Indicates the state that sessionProvider can provide.
     * 
     * sessionProviderが提供可能な状態を表します。
     */
    const READY = TRUE;


    /**
     * Indicates the state of sessionProvider.
     * 
     * sessionProviderの状態を表します。
     *
     * @var boolean
     */
    public static $STATUS;


    /**
     * Stores the instantiated SessionServiceProvider class object.
     * 
     * インスタンス化されたSessionServiceProviderクラスオブジェクトを格納します。
     *
     * @var object
     */
    public static $session;


    /**
     * Creates and returns a class object that can access all of the session's features.
     * And call the boot method.
     * 
     * セッションの機能の全てにアクセスする事ができるクラスオブジェクトを作成し返します。
     * bootメソッドを呼び出します。
     *
     * @return object
     */
    public static function register()
    {
        if( !isset( self::$session ) ){
            self::$session = new self;
        }
        return self::$session->boot( self::$session );
    }


    /**
     * Set the initial settings for the session.
     * It does start a session.
     * 
     * セッションの初期設定を行います。
     * session_start関数によりセッションをスタートします。
     *
     * @param   object  $sessionInstance
     * @return  object
     */
    public function boot( $sessionInstance )
    {
        session_start();
        
        self::$STATUS = READY;

        return $sessionInstance;
    }
}
