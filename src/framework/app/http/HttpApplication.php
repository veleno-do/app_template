<?php
/**
 * Base application class that is new in Kernel.
 * Classes that provide the settings required for the initial startup operation of the application are stored in constant.
 * This file cannot be edited.
 * 
 * 
 * Kernelでnewされる基本のアプリケーションクラスです。
 * アプリケーションの初期起動動作に必要な設定を提供するクラスなどをConstatに格納します。
 * このファイルは編集不可です。
 */

namespace MyMVC\App\Http;

use \MyMVC\Core\Application as Application;     // => /framework/core/Application.php

class HttpApplication extends Application
{
    /**
     * This is the storage location of the configuration provider.
     * There is basically no addition.
     * 
     * 設定プロバイダの格納先です。
     * 追加は基本的にはないです。
     */
    const ENV = [
        "env" => \MyMVC\Config\EnvProvider::class,      // => /framework/config/EnvProvider.php
    ];
}
