<?php
/**
 * Read the routing rules and register them in a tree structure.
 * This file cannot be edited.
 * 
 * 
 * ルーティングルールを読みツリー構造にして登録します。
 * このファイルは編集不可です。
 */

namespace MyMVC\Core\Router;

abstract class RequestMethodMapper extends RouteTree
{
    /**
     * Creates a routing tree based on the array containing the passed Uri information.
     * The tree created is merged with the existing tree.
     * 
     * 渡されたURI情報を格納した配列を基にルーティング ツリーを作成します。
     * 作成されたツリーは既存のツリーと合体して統合されます。
     *
     * @param   array   $uri
     * @param   string  $method
     * @param   string  $option
     * @return  void
     */
    public function mapping( $uri, $method, $option )
    {
        $tree = [];
        $var = [ $method => $option ];

        for( $index = count( $uri ) - 1; $uri[ $index ] !== NULL; $index -- ){
            $tree = [ $uri[ $index ] => $var ];
            $var = $tree;
        }
        $this->routingTree = array_replace_recursive( $this->routingTree, $tree );
    }


    /**
     * A function called by the mapper method.
     * Formats the URI, stores it in an array and returns it.
     * 
     * mapperメソッドにより呼び出される関数です。
     * URIを整形して配列に格納して返します。
     *
     * @param   string  $uri
     * @return  array
     */
    public function URIFormatting( $uri )
    {
        switch( mb_substr_count( $uri, "/" ) ){
            case 0:     break;
            case 1:     $uri = array(); break;
            case 2:     $uri = rtrim( ltrim( $uri, "/" ), "/" ); $uri = [ $uri ]; break;
            default:    $uri = rtrim( ltrim( $uri, "/" ), "/" ); $uri = explode( "/", $uri ); break;
        }
        array_unshift( $uri, "/" );
        array_push( $uri, "ENDPONT" );
        return $uri;
    }


    /**
     * Front method for registering routing rules.
     * 
     * ルーティングルールの登録を行うフロントメソッドです。
     *
     * @param   string  $method
     * @param   array   $rule
     * @return  void
     */
    public function mapper( $method, $rule )
    {
        foreach( $rule as $path => $option ){
            if( mb_substr_count( $path, "/" ) >= 1 ){
                $uri = $this->URIFormatting( $path );
                $this->mapping( $uri, $method, $option );
            }
        }
    }


    /**
     * Method called from Web.php and Api.php.
     * This method accepts registration of get request rules.
     * 
     * Web.phpとApi.phpによって呼び出されるメソッドです。
     * このメソッドはGETリクエストルールの登録を受け付けます。
     *
     * @param   string  $path
     * @param   string  $option
     * @return  void
     */
    public function get( $path, $option )
    {
        $this->mapper( "GET", [
            $path => $option,
        ] );
    }


    /**
     * Method called from Web.php and Api.php.
     * This method accepts registration of post request rules.
     * 
     * Web.phpとApi.phpによって呼び出されるメソッドです。
     * このメソッドはPOSTリクエストルールの登録を受け付けます。
     *
     * @param   string  $path
     * @param   string  $option
     * @return  void
     */
    public function post( $path, $option )
    {
        $this->mapper( "POST", [
            $path => $option,
        ] );
    }


    /**
     * Method called from Web.php and Api.php.
     * This method accepts registration of put request rules.
     * 
     * Web.phpとApi.phpによって呼び出されるメソッドです。
     * このメソッドはPUTリクエストルールの登録を受け付けます。
     *
     * @param   string  $path
     * @param   string  $option
     * @return  void
     */
    public function put( $path, $option )
    {
        $this->mapper( "PUT", [
            $path => $option,
        ] );
    }


    /**
     * Method called from Web.php and Api.php.
     * This method accepts registration of delete request rules.
     * 
     * Web.phpとApi.phpによって呼び出されるメソッドです。
     * このメソッドはDELETEリクエストルールの登録を受け付けます。
     *
     * @param   string  $path
     * @param   string  $option
     * @return  void
     */
    public function delete( $path, $option )
    {
        $this->mapper( "DELETE", [
            $path => $option,
        ] );
    }
}
