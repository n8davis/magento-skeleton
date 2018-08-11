<?php
namespace Starter\Example\Core;


class Plugin
{

    const BASE_URL = '';
    const MINIMUM_INVENTORY = 2;

    public static function viewData( $data , $dump = true ){
        if( defined( 'ISCLI' ) === false ) define( 'ISCLI', PHP_SAPI === 'cli' );
        echo ISCLI ? "\r\n" : '<pre>';
        $dump ? var_dump( $data ) : print_r( $data ) ;
        echo ISCLI ? "\r\n" : '</pre>';
    }
}