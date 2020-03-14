<?php
/**
 * Combined into the kernel for easy tracking of application movement.
 * It is just a file that handles the right processing in the application.
 * 
 * Doc comments are described in each section, so please refer to it.
 * 
 * 
 * アプリケーションの動作処理を簡略化して記述してあります。
 * 各セクションごとにDocコメントを記述しましたので参考までに読んでください。
 * 
 * 又、各セクションは編集不可です。
 */

namespace MyMVC\App;

use \MyMVC\App\Http\HttpApplication as HttpApplication;     // => ./http/HttpApplication.php


/**
 * -------------------------------------
 * Create a new Application instance.
 * -------------------------------------
 * 
 * By creating a new application instance, you can easily access the controller via routing.
 * Response can be obtained in the application instance.
 * 
 * 新しいアプリケーションのインスタンスを作成する事で簡単に初期処理から各プロバイダにアクセスする事ができるようになります。
 * newでは初期処理のみを行います。
 */
$app = new HttpApplication;


/**
 * -------------------------------------
 * Get the response.
 * -------------------------------------
 * 
 * Analyzes the request from the obtained application instance and obtains the response.
 * 
 * アプリケーションインスタンスからgetResponseメソッドを呼び出して、レスポンスを取得します。
 */
$app->getResponse();


/**
 * -------------------------------------
 * Send the response.
 * -------------------------------------
 * 
 * Returns the response obtained by the application method and displays it on the browser.
 * 
 * レスポンスをクライアントに送信します。
 */
$app->send();


/**
 * Terminates processing.
 * 
 * 処理を終了します。
 */
exit;
