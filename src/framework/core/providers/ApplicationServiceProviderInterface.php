<?php
/**
 * Defines the interface of the provider that is called when launching the application.
 * Each provider is described based on this interface.
 * 
 * This file cannot be edited.
 * 
 * 
 * アプリケーションを起動する際に呼び出されるプロバイダのインターフェースを定義します。
 * 各プロバイダはこのインターフェースを基に記述されています。
 * 
 * 又、このファイルは編集不可です。
 */

namespace MyMVC\Core\Providers;

interface ApplicationServiceProviderInterface
{
    /**
     * Called for startup processing.
     * Instantiate and return for easy access to each method.
     * The register method must always be called first.
     * 
     * 起動処理に呼び出されます。
     * 必ず一番最初に呼び出します。
     * 
     * @return  object
     */
    public static function register();


    /**
     * Performs boot processing after startup processing.
     * After that, the method can be used.
     * 
     * 起動処理後のブート処理を行います。以降メソッドの使用が可能になります。
     *
     * @param   object  $instance
     * @return  object
     */
    public function boot( $instance );
}
