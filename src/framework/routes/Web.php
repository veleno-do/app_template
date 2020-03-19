<?php
/**
 * -------------------------------------
 * Route web
 * -------------------------------------
 * 
 * This file serves as a routing table.
 * Route synchronous communication.
 * New routing rules can be added with Route :: <request method>.
 * The following describes how to write each request. This file is editable.
 * 
 * 
 * このファイルはルーティングの役割をします。
 * 同期通信をルーティング します。
 * Route::< request method > で新規ルーティングルールを追加する事ができます。
 * 以下に各リクエスト毎の説明を記述します。このファイルは編集可です。
 * 
 * 
 * $this->get( "<path>", "<Controller@Identify>or<function>" )      =>  Add rules for get requests. Getリクエストのルールを追加します。
 * 
 * $this->post( "<path>", "<Controller@Identify>or<function>" )     =>  Add rules for post requests. Postリクエストのルールを追加します。
 * 
 * $this->put( "<path>", "<Controller@Identify>or<function>" )      =>  Add rules for put requests. Putリクエストのルールを追加します。
 * 
 * $this->delete( "<path>", "<ControllerpIdentify>or<function>" )   =>  Add rules for delete requests. Deleteリクエストのルールを追加します。
 */

$this->get( "/", "ViewController@welcome" );

$this->get( "/user/", "ViewController@user" );// => temporary
