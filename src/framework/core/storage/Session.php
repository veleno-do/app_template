<?php
/**
 * Middleware group that manages sessions.
 * This file cannot be edited.
 * 
 * 
 * セッションを管理するミドルウェア群です。
 * このファイルは編集不可です。
 */

namespace MyMVC\Core\Storage;

abstract class Session
{
    /**
     * Store the value in the server session file.
     * 
     * サーバーのセッションファイルに値を格納します。
     *
     * @param   string  $name
     * @param   string  $value
     * @return  void
     */
    public function sessionSet( $name, $value )
    {
        if( isset( $name, $value ) ){
            $_SESSION[ $name ] = $value;
        }
    }


    /**
     * Searches and retrieves the value described in the server session file by the name specified in the argument.
     * 
     * サーバーのセッションファイルから引数で指定した名前の値を取り出します。
     *
     * @param   string  $name
     * @return  string
     */
    public function sessionGet( $name )
    {
        if( isset( $name ) ){
            return $_SESSION[ $name ];
        }
    }


    /**
     * Checks whether the session information of the specified name is stored in the session file of the server.
     * 
     * サーバーのセッションファイルに指定した名前のセッション情報が格納されているか調べます。
     *
     * @param   string  $name
     * @return  boolean
     */
    public function sessionIsset( $name )
    {
        if( isset( $name ) ){
            return isset( $_SESSION[ $name ] );
        }
    }


    /**
     * Delete the value stored in the server session file.
     * 
     * サーバーのセッションファイルに保存されている値を削除します。
     *
     * @param   string  $name
     * @return  void
     */
    public function sessionUnset( $name )
    {
        if( isset( $name ) ){
            unset( $_SESSION[ $name ] );
        }
    }


    /**
     * End the session
     * 
     * セッションを終了します。
     *
     * @return  void
     */
    public function sessionDestroy()
    {
        $_SESSION = array();
        setcookie( session_name(), '', time()-1, '/' );
        session_destroy();
    }
}
