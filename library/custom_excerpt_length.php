<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 2015-12-11
 * Time: 21:45
 */


if ( ! function_exists( 'custom_excerpt_length' ) ) {

    function custom_excerpt_length( $length )
    {
        return 30;
    }

    add_filter('excerpt_length', 'custom_excerpt_length', 999);
}