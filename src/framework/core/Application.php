<?php
/**
 * This is the class from which the HttpApplication class is inherited.
 * Defines a constant that stores a provider that provides basic functions located under the core directory.
 * It is also a file that defines a constant that stores the provider that provides the plug-in function.
 * This file cannot be edited except for the constant that stores the plugin provider.
 * 
 * 
 * HttpApplicationクラスの継承元のクラスです。
 * coreディレクトリ配下に置かれている基本機能を提供するproviderを格納するconstantを定義しています。
 * 又、プラグインを提供するproviderを格納するconstantを定義するファイルでもあります。
 * このファイルはプラグインのプロバイダを格納するコンスタントを除いて編集不可です。
 */

namespace MyMVC\Core;

use \MyMVC\Core\Middleware\App as Middleware;   // => /framework/core/middleware/App.php

abstract class Application extends Middleware
{
    /**
     * This is the storage location of the provider that provides basic functions located under the core directory.
     * Editing is prohibited.
     * 
     * coreディレクトリ配下にいおかれている基本機能を提供するproviderの格納先です。
     * 編集禁止です。
     */
    const BASE_PROVIDERS = [
        "cache" => \MyMVC\Core\Storage\Providers\CacheServiceProvider::class,           // => ./storage/providers/CacheServiceProvider.php
        "cookie" => \MyMVC\Core\Storage\Providers\CookieServiceProvider::class,         // => ./storage/providers/CookieServiceProvider.php
        "session" => \MyMVC\Core\Storage\Providers\SessionServiceProvider::class,       // => ./storage/providers/SessionServiceProvider.php
        "auth" => \MyMVC\Core\Providers\AuthServiceProvider::class,                     // => ./providers/AuthServiceProvider.php
        "route" => \MyMVC\Core\Providers\RouteServiceProvider::class,                   // => ./providers/RouteServiceProvider.php
        "model" => \MyMVC\Model\ModelServiceProvider::class,                            // => /framework/model/ModelServiceProvider.php
    ];


    /**
     * Stores the provider that provides the basic functions of the plug-in.
     * Editing is allowed.
     * 
     * プラグインの基本機能を提供するプロバイダの格納先です。
     * 編集可
     */
    const PLUGIN_PROVIDERS = [
        // 
    ];
}
