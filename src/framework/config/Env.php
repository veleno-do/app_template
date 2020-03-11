<?php
/**
 * This is the configuration file for this framework.
 * It can be roughly divided into two types.
 * One can be read by describing the settings of the original frame, and the second is to describe the settings of the plugin.
 * 
 * This file can be edited because it depends on the frame and plug-in to be loaded.
 * 
 * 
 * このファイルは当フレームワークの設定ファイルです。
 * 二種類の設定に分けられています。
 * 一つは大元のフレームワークの設定、二つ目はプラグインの設定を記述します。
 * 
 * このファイルは、読み込むフレームやプラグインに依存するため、編集可となってます。
 */

namespace MyMVC\Config;

class Env
{
    /**
     * Describe the configuration of original framework.
     * Basically do not edit this.
     * 
     * 大元のフレームワークの設定を参照します。
     * 基本的にはこちらの設定は編集しません。
     */
    const BASE_FRAME = [
        \MyMVC\Config\BaseFrame::class,     // => /framework/config/BaseFrame.php
    ];


    /**
     * Write the plugin configuration file.
     * Describe the plug-in settings to load.
     * 
     * プラグインの設定ファイルを記述します。
     * 読み込むプラグインの設定を参照するために編集します。
     */
    const PLUGIN = [
        // \MyMVC\Core\Plugin\
    ];
}
