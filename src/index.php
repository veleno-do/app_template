<?php
/** 
 * Front to the application.
 * This application template engine is for your own use only and is not designed to be used by third parties.
 * This file does not do anything,
 * It loads autoloader and kernel.
 * 
 * 
 * アプリケーションのインデックスファイルです。
 * このアプリケーションテンプレートは自分用に使うことを想定して作られています。
 * 
 * @package App Template
 * @version 1.0.0
 */

/**
 * @copyright veneno-do All Rights Reserved.
 * @author veneno-do
 * @link https://github.com/veleno-do
 */

/**
 * Register the auto loader.
 * 
 * After loading the autoloader, you no longer need to use the require function to read the file.
 * Autoloader editing is not allowed.
 * 
 * オートローダーをrequireします。以降、require関数を使ってファイルを読み込む必要がなくなります。又、オートローダーは編集不可です。
 */
require dirname( __FILE__ ) . '/vendor/autoload.php';


/**
 * Outsource work to the kernel.
 * 
 * 以降初期処理から終了処理までをカーネルに委託します。
 */
require dirname( __FILE__ ) . '/framework/app/Kernel.php';
