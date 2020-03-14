<?php
/**
 * -------------------------------------
 * Route id
 * -------------------------------------
 * 
 * This file serves as a routing table.
 * Route ID.
 * New routing rules can be added with Route :: parameter.
 * 
 * 
 * このファイルはルーティングの役割をします。
 * IDをルーティング します。
 * Route::parameter で新規ルーティングルールを追加する事ができます。
 * 
 * 
 * Route::parameter( "user", <rule> )                               =>  Add rules for get id. idの定義を指定します。
 */

Route::parameter( "{:user}", "/^(user)([a-zA-Z0-9]{26})$/" );       // =>  "uniqid('user'): %s\r\n", uniqid('user');
