<?php
/**
 * Validation function provided by validationProvider.
 * This file cannot be edited.
 * 
 * 
 * ValidationProviderが提供するバリデーション関数です。
 * このファイル編集不可です。
 */

namespace MyMVC\Core\Validation;

class Validation
{
    /**
     * Checks for a Boolean value.
     * 
     * ブール値か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isBool( $str )
    {
        if( isset( $str ) && filter_var( $str, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE ) === NULL ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a email value.
     * 
     * メールアドレスか否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isEmail( $str )
    {
        if( isset( $str ) && filter_var( $str, FILTER_VALIDATE_EMAIL ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a Int value.
     * 
     * 整数値か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isInt( $str )
    {
        if( isset( $str ) && filter_var( $str, FILTER_VALIDATE_INT ) === FALSE ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a Age value.
     * 
     * 年齢か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isAge( $str )
    {
        if( isset( $str ) && in_array( $str, range( 0, 130 ) ) && $this->isInt( $str ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a Hafl Width Alphanumeric value.
     * 
     * 半角英数か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isHalfWidthAlphanumeric( $str )
    {
        if( isset( $str ) && preg_match( "/^[a-zA-Z0-9]+$/", $str ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a Tel value.
     * 
     * 電話番号か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isTel( $str )
    {
        if( isset( $str ) && preg_match( "/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/", $str ) || preg_match( "/^[0-9]{2,4}[0-9]{2,4}[0-9]{3,4}$/", $str ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a Postcode value.
     * 
     * 郵便番号か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isPostcode( $str )
    {
        if( isset( $str ) && preg_match( "/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/", $str ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a URL value.
     * 
     * URLか否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isURL( $str )
    {
        if( isset( $str ) && preg_match( "/^(https?|ftp)(://[-_.!~*'()a-zA-Z0-9;/?:@&amp;amp;=+$,%#]+)$/", $str ) ){
            return TRUE;
        }else{
            return FLASE;
        }
    }


    /**
     * Checks for a Hiragana value.
     * 
     * 平仮名か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isHiragana( $str )
    {
        if( isset( $str ) && preg_match( "/[^ぁ-んー]/u", $str ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a Katakana value.
     * 
     * 片仮名か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isKatakana( $str )
    {
        if( isset( $str ) && preg_match( "/[^ァ-ヶー]/u", $str ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }


    /**
     * Checks for a Kanji value.
     * 
     * 漢字か否かの確認を行います。
     *
     * @param  unknown  $str
     * @return boolean
     */
    public function isKanji( $str )
    {
        if( isset( $str ) && preg_match( "/[^一-龠]/u", $str ) ){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
