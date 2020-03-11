<?php

namespace MyMVC\Config;

class BaseFrame
{
    /**
     * -------------------------------------
     * Set php parameters
     * -------------------------------------
     * 
     * Set the php settings that can be set with the php_ini function.
     * Doc comments are described for each parameter, so please read them for reference.
     * 
     * php_ini関数で設定できるphpの設定を設定します。
     * 各パラメーター毎にDocコメントを記述してありますので参考までに読んでください。
     */
    
    /**
     * Set the time zone.
     * 
     * タイムゾーンの設定を行います。
     */
    const DATE_TIMEZONE = "Asia/Tokyo";


    /**
     * You can choose to show or hide php errors
     * 
     * phpエラーの表示非表示を選択します。
     */
    const DISPLAY_ERROR = TRUE;


    /**
     * Select the php error level to output.
     * 
     * 出力するphpエラーのレベルを選択します。
     */
    const ERROR_REPORTING = E_ALL;


    /**
     * Set the upper limit of memory. -1 has no upper limit.
     * 
     * メモリーの上限値を設定します。-1は上限値なしです。
     */
    const MEMORY_LIMIT = "32M";


    /**
     * Set whether to save the error log.
     * 
     * エラーログを保存するかの設定を行います。
     */
    const LOG_ERROR = "On";


    /**
     * Set the save destination of the error log.
     * 
     * エラーログの保存先を設定します。
     */
    const ERROR_LOG_PATH = "/framework/log/error.log";


    /**
     * Set the maximum time before the script is forcibly terminated.
     * 
     * スクリプトが強制終了するまでの最大時間の設定を行います。
     */
    const MAX_EXECUTION_TIME = 60;


    /**
     * Set the default character code to be set for Content-Type.
     * 
     * Content-Type に設定するデフォルトの文字コードの設定を行います。
     */
    const DEFAULT_CHARSET = "UTF-8";


    /**
     * Set the internal encoding.
     * 
     * 内部エンコーディングの設定を行います。
     */
    const MBSTRING_INTERNAL_ENCODING = "UTF-8";


    /**
     * Set the language used in mbstring.
     * 
     * mbstring で使用する言語の設定を行います。
     */
    const MBSTRING_LANGUAGE = "Japanese";


    /**
     * Cookies can be sent only during HTTPS communication (SSL communication).
     * 
     * HTTPS通信時（SSL通信時）のみCookieの送信を可能に設定します。
     */
    const COOKIE_SECURE = 0;


    /**
     * Set the path to send Cookie.
     * 
     * Cookie（クッキー）を送信するパスの設定を行います。
     */
    const SESSION_COOKIE_PATH = "";


    /**
     * Set so that cookies cannot be accessed from Javascript.
     * 
     * Javascriptからクッキーへアクセス出来ないように設定します。
     */
    const COOKIE_HTTP_ONLY = 1;


    /**
     * Set the maximum expiration date of the session.
     * 
     * セッションの最大有効期限の設定を行います。
     */
    const SESSION_MAXLIFETIME = 1440;       // => ( minuts )


    /**
     * -------------------------------------
     * Set basic site infomation
     * -------------------------------------
     * 
     * 
     */
    const SITE_NAME = "App Template";
    const AUTHER = "Yuto Hayashi";
}
